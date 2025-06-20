<?php

namespace App\Entity;

use App\Repository\GuideTouristiqueRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;
use Symfony\Component\Validator\Constraints as Assert; // Import pour les contraintes de validation

#[ORM\Entity(repositoryClass: GuideTouristiqueRepository::class)]
//#[Broadcast] // Décommenter si tu utilises Turbo Broadcast
#[ApiResource] // Décommenter si tu utilises API Platform

class GuideTouristique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)] // photoFilename peut être null si l'upload est optionnel ou échoue
    private ?string $photoFilename = null; // Nom du fichier photo stocké

    #[ORM\Column]
    private ?bool $statut = null; // Statut (actif/inactif)

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le pays d'affectation ne peut pas être vide.")]
    #[Assert\Length(max: 100, maxMessage: "Le pays d'affectation ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $paysAffectation = null;

    #[ORM\Column(length: 255, unique: true)] // Email unique
    #[Assert\NotBlank(message: "L'adresse e-mail ne peut pas être vide.")]
    #[Assert\Email(message: "Veuillez saisir une adresse e-mail valide.")]
    #[Assert\Length(max: 255, maxMessage: "L'adresse e-mail ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $email = null;

    #[ORM\Column(length: 20, nullable: true)] // Téléphone optionnel
    #[Assert\Length(max: 20, maxMessage: "Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $telephone = null;

    /**
     * @var Collection<int, Visite>
     */
    #[ORM\OneToMany(targetEntity: Visite::class, mappedBy: 'guide', orphanRemoval: true)]
    private Collection $visites;

    public function __construct()
    {
        $this->visites = new ArrayCollection();
        $this->statut = true; // Définit le statut à true par défaut lors de la création
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // Pas de setter pour l'ID

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
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

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPaysAffectation(): ?string
    {
        return $this->paysAffectation;
    }

    public function setPaysAffectation(string $paysAffectation): static
    {
        $this->paysAffectation = $paysAffectation;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection<int, Visite>
     */
    public function getVisites(): Collection
    {
        return $this->visites;
    }

    public function addVisite(Visite $visite): static
    {
        if (!$this->visites->contains($visite)) {
            $this->visites->add($visite);
            $visite->setGuide($this);
        }

        return $this;
    }

    public function removeVisite(Visite $visite): static
    {
        if ($this->visites->removeElement($visite)) {
            // set the owning side to null (unless already changed)
            if ($visite->getGuide() === $this) {
                $visite->setGuide(null);
            }
        }

        return $this;
    }
}
