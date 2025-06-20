<?php

namespace App\Form;

use App\Entity\Visite;
use App\Entity\GuideTouristique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType; // Pour la date
use Symfony\Component\Form\Extension\Core\Type\TimeType; // Pour l'heure
use Symfony\Component\Form\Extension\Core\Type\IntegerType; // Pour la durée (nombre entier)
use Symfony\Component\Form\Extension\Core\Type\NumberType; // Pour le prix (nombre décimal)
use Symfony\Component\Form\Extension\Core\Type\FileType; // Pour la photo
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank; // Exemple de contrainte si un champ est obligatoire
use Symfony\Component\Validator\Constraints\PositiveOrZero; // Exemple de contrainte pour les nombres >= 0
use Symfony\Component\Validator\Constraints\Positive; // Exemple de contrainte pour les nombres > 0


class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'attr' => ['placeholder' => 'Ex: France'],
                'required' => true, // Rends le champ obligatoire si nécessaire
                'constraints' => [
                    new NotBlank(['message' => 'Le pays est obligatoire.']),
                ],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'attr' => ['placeholder' => 'Ex: Paris'],
                'required' => true, // Rends le champ obligatoire si nécessaire
                 'constraints' => [
                    new NotBlank(['message' => 'Le lieu est obligatoire.']),
                ],
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text', // Utilise un champ de date HTML5
                'html5' => true, // Cette option est correcte pour DateType
                'required' => true, // Rends le champ obligatoire si nécessaire
                 'constraints' => [
                    new NotBlank(['message' => 'La date est obligatoire.']),
                ],
            ])
            ->add('heureDebut', TimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text', // Utilise un champ d'heure HTML5
                'html5' => true, // Cette option est correcte pour TimeType
                'required' => true, // Rends le champ obligatoire si nécessaire
                 'constraints' => [
                    new NotBlank(['message' => "L'heure de début est obligatoire."]),
                ],
            ])
            ->add('duree', IntegerType::class, [ // Utilise IntegerType pour la durée (nombre entier)
                'label' => 'Durée (en heures)', // Précise l'unité
                // !!! SUPPRESSION DE L'OPTION 'html5' ICI !!!
                // 'html5' => true, // <-- Cette ligne a été supprimée car non supportée par IntegerType
                'required' => true, // Rends le champ obligatoire si nécessaire
                'attr' => [
                    'placeholder' => 'Ex: 3',
                    'min' => 1, // Ajoute une contrainte HTML5 pour un minimum de 1 heure
                ],
                 'constraints' => [
                    new NotBlank(['message' => 'La durée est obligatoire.']),
                    new Positive(['message' => 'La durée doit être un nombre entier positif.']), // Contrainte Symfony pour un nombre > 0
                ],
            ])
            // heureFin n'est pas ajoutée car elle est calculée dans l'entité ou ailleurs
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'attr' => ['placeholder' => 'Ajoutez un commentaire...'],
                'required' => false, // Le commentaire n'est généralement pas obligatoire
            ])
            ->add('guide', EntityType::class, [
                'class' => GuideTouristique::class,
                'choice_label' => function(GuideTouristique $guide) {
                    // Assure-toi que getNom() et getPrenom() existent dans ton entité GuideTouristique
                    return $guide->getNom() . ' ' . $guide->getPrenom();
                },
                'placeholder' => 'Sélectionnez un guide',
                'label' => 'Guide touristique',
                'required' => true, // Rends le champ obligatoire si nécessaire
                 'constraints' => [
                    new NotBlank(['message' => 'Le guide est obligatoire.']),
                ],
            ])
             ->add('photoFile', FileType::class, [ // Champ pour l'upload de photo
                'label' => 'Photo (JPG, PNG, GIF)', // Ajout de GIF dans le label
                'mapped' => false, // IMPORTANT : Ne mappe pas ce champ directement à l'entité
                'required' => false, // Le champ n'est pas obligatoire
                'constraints' => [
                    new File([
                        'maxSize' => '2048k', // Taille maximale du fichier
                        'mimeTypes' => [ // Types MIME autorisés
                            'image/jpeg',
                            'image/png',
                            'image/gif', // Ajout de GIF
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF).', // Message mis à jour
                    ])
                ],
            ])
            // Ajoute d'autres champs si ton entité Visite en a (ex: prix, nombreMaxVisiteurs)
            // Exemple pour le prix (utilise NumberType pour les décimaux)
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
                'scale' => 2, // Nombre de décimales
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: 25.50',
                    'min' => 0, // Le prix ne peut pas être négatif
                    'step' => 0.01, // Permet les centimes
                ],
                 'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                    new PositiveOrZero(['message' => 'Le prix doit être un nombre positif ou nul.']),
                ],
            ])
             // Exemple pour le nombre maximum de visiteurs
            ->add('nombreMaxVisiteurs', IntegerType::class, [
                'label' => 'Nombre maximum de visiteurs',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: 20',
                    'min' => 1, // Au moins 1 visiteur max
                ],
                 'constraints' => [
                    new NotBlank(['message' => 'Le nombre maximum de visiteurs est obligatoire.']),
                    new Positive(['message' => 'Le nombre maximum de visiteurs doit être un nombre entier positif.']),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
            // 'validation_groups' => ['Default'], // 'Default' est souvent implicite, tu peux le laisser ou l'enlever
        ]);
    }
}
