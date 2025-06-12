<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use App\Validator\Constraints as AppAssert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
//#[Broadcast]
class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 100)]
    private ?string $pays = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureDebut = null;

    #[ORM\Column]
    private ?int $duree = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureFin = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'visites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GuideTouristique $guide = null;

    /**
     * @var Collection<int, Visiteur>
     */

    #[ORM\OneToMany(targetEntity: Visiteur::class, mappedBy: 'visite')]
    private Collection $visiteurs;

    public function __construct()
    {
        $this->visiteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

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

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getHeureDebut(): ?\DateTime
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTime $heureDebut): static
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

    public function getHeureFin(): ?\DateTime
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTime $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

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
        if ($this->heureDebut && $this->duree) {
            $this->heureFin = clone $this->heureDebut;
            $this->heureFin->add(new \DateInterval("PT{$this->duree}H"));
        }

    }
}
