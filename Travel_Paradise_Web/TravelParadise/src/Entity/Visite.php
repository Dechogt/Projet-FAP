<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use App\Validator\Constraints as AppAssert; // Assure-toi que ce namespace est correct si tu as des contraintes personnalisées
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;
use Symfony\Component\Validator\Constraints as Assert; // Import pour les contraintes de validation

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
//#[Broadcast] // Décommenter si tu utilises Turbo Broadcast
#[ORM\HasLifecycleCallbacks] // Ajoute cette annotation pour que les méthodes PrePersist/PreUpdate soient appelées

class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)] // photo peut être null
    private ?string $photoFilename = null; // Renommé pour cohérence avec l'upload

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
    #[Assert\Date(message: "Veuillez saisir une date valide.")]
    private ?\DateTimeInterface $date = null; // Utilise DateTimeInterface pour plus de flexibilité

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de début ne peut pas être vide.")]
    #[Assert\Time(message: "Veuillez saisir une heure valide.")]
    private ?\DateTimeInterface $heureDebut = null; // Utilise DateTimeInterface

    #[ORM\Column]
    #[Assert\NotBlank(message: "La durée ne peut pas être vide.")]
    #[Assert\Positive(message: "La durée doit être un nombre positif (en heures).")] // Supposons que la durée est en heures
    private ?int $duree = null; // Durée en heures

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)] // heureFin peut être null si heureDebut ou duree sont null
    private ?\DateTimeInterface $heureFin = null; // Calculé automatiquement

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Le commentaire ne peut pas être vide.")]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'visites')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: "Veuillez sélectionner un guide pour cette visite.")]
    private ?GuideTouristique $guide = null;

    /**
     * @var Collection<int, Visiteur>
     */
    #[ORM\OneToMany(targetEntity: Visiteur::class, mappedBy: 'visite', orphanRemoval: true)] // Ajout de orphanRemoval si tu veux supprimer les visiteurs avec la visite
    private Collection $visiteurs;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    public function __construct()
    {
        $this->visiteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoFilename(): ?string // Renommé
    {
        return $this->photoFilename;
    }

    public function setPhotoFilename(?string $photoFilename): static // Renommé
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

    // Pas de setter pour heureFin car elle est calculée automatiquement

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
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
        if ($this->heureDebut && $this->duree !== null) { // Vérifie que duree n'est pas null
            $this->heureFin = clone $this->heureDebut;
            // Assure-toi que la durée est en heures pour l'intervalle
            $this->heureFin->add(new \DateInterval("PT{$this->duree}H"));
        } else {
            $this->heureFin = null; // Met heureFin à null si heureDebut ou duree manquent
        }
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
