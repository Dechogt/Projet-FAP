<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
#[ORM\HasLifecycleCallbacks] // Needed for @ORM\PrePersist and @ORM\PreUpdate
class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoFilename = null; // Renamed for clarity

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le pays ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "Le pays ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $pays = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le lieu ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le lieu ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date ne peut pas être vide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de début ne peut pas être vide.")]
    private ?\DateTimeInterface $heureDebut = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La durée ne peut pas être vide.")]
    #[Assert\Positive(message: "La durée doit être un nombre positif (en heures).")]
    private ?int $duree = null; // Durée en heures

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heureFin = null; // Calculated automatically

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'visites')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: "Veuillez sélectionner un guide pour cette visite.")]
    private ?GuideTouristique $guide = null;

    /**
     * @var Collection<int, Visiteur>
     */
    #[ORM\OneToMany(targetEntity: Visiteur::class, mappedBy: 'visite', orphanRemoval: true)]
    private Collection $visiteurs;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le prix ne peut pas être vide.")]
    #[Assert\PositiveOrZero(message: "Le prix doit être un nombre positif ou nul.")]
    private ?string $prix = null; // Using string for DECIMAL type

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre maximum de visiteurs ne peut pas être vide.")]
    #[Assert\Positive(message: "Le nombre maximum de visiteurs doit être un nombre entier positif.")]
    private ?int $nombreMaxVisiteurs = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $statut = null;

    public function __construct()
    {
        $this->visiteurs = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable(); // Initialize createdAt on creation
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoFilename(): ?string
    {
        return $this->photoFilename;
    }

    public function setPhotoFilename(?string $photoFilename): static
    {
        $this->photoFilename = $photoFilename;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTimeInterface $heureDebut): static
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    // No setter for heureFin as it's calculated automatically

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getGuide(): ?GuideTouristique
    {
        return $this->guide;
    }

    public function setGuide(?GuideTouristique $guide): static
    {
        $this->guide = $guide;

        return $this;
    }

    /**
     * @return Collection<int, Visiteur>
     */
    public function getVisiteurs(): Collection
    {
        return $this->visiteurs;
    }

    public function addVisiteur(Visiteur $visiteur): static
    {
        if (!$this->visiteurs->contains($visiteur)) {
            $this->visiteurs->add($visiteur);
            $visiteur->setVisite($this);
        }

        return $this;
    }

    public function removeVisiteur(Visiteur $visiteur): static
    {
        if ($this->visiteurs->removeElement($visiteur)) {
            // set the owning side to null (unless already changed)
            if ($visiteur->getVisite() === $this) {
                $visiteur->setVisite(null);
            }
        }

        return $this;
    }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updateHeureFin(): void
    {
        if ($this->heureDebut instanceof \DateTimeInterface && $this->duree !== null) {
            // Create a mutable DateTime object from heureDebut to perform calculations
            // This is important because TIME_MUTABLE expects a \DateTime object, not \DateTimeImmutable
            $heureDebutDateTime = \DateTime::createFromInterface($this->heureDebut);

            // Add the duration (in hours)
            $heureFin = $heureDebutDateTime->add(new \DateInterval("PT{$this->duree}H"));

            // Assign the calculated \DateTime object to heureFin
            $this->heureFin = $heureFin;
        } else {
            $this->heureFin = null;
        }
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNombreMaxVisiteurs(): ?int
    {
        return $this->nombreMaxVisiteurs;
    }

    public function setNombreMaxVisiteurs(int $nombreMaxVisiteurs): static
    {
        $this->nombreMaxVisiteurs = $nombreMaxVisiteurs;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Returns the combined date and time of the visit start.
     */
    public function getDateTime(): ?\DateTimeImmutable
    {
        if ($this->date && $this->heureDebut) {
            // Combine date and time into a string format that DateTimeImmutable can parse
            $dateTimeString = $this->date->format('Y-m-d') . ' ' . $this->heureDebut->format('H:i:s');
            return \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $dateTimeString);
        }
        return null;
    }

    /**
     * Returns the combined date and time of the visit end.
     */
     public function getDateTimeFin(): ?\DateTimeImmutable
    {
        if ($this->date && $this->heureFin) {
            // Combine date and time into a string format that DateTimeImmutable can parse
            $dateTimeString = $this->date->format('Y-m-d') . ' ' . $this->heureFin->format('H:i:s');
            return \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $dateTimeString);
        }
        return null;
    }
}