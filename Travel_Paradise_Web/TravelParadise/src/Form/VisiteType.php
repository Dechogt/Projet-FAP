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
use Symfony\Component\Form\Extension\Core\Type\IntegerType; // Pour la durée
use Symfony\Component\Form\Extension\Core\Type\FileType; // Pour la photo
use Symfony\Component\Validator\Constraints\File;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'attr' => ['placeholder' => 'Ex: France'],
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'attr' => ['placeholder' => 'Ex: Paris'],
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('heureDebut', TimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('duree', IntegerType::class, [ // Utilise IntegerType pour la durée
                'label' => 'Durée (en heures)', // Précise l'unité
                'html5' => true,
                'attr' => ['placeholder' => 'Ex: 3'],
            ])
            // heureFin n'est pas ajoutée car elle est calculée
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'attr' => ['placeholder' => 'Ajoutez un commentaire...'],
            ])
            ->add('guide', EntityType::class, [
                'class' => GuideTouristique::class,
                'choice_label' => function(GuideTouristique $guide) {
                    return $guide->getNom() . ' ' . $guide->getPrenom();
                },
                'placeholder' => 'Sélectionnez un guide',
                'label' => 'Guide touristique',
            ])
             ->add('photoFile', FileType::class, [ // Champ pour l'upload de photo
                'label' => 'Photo (JPG, PNG)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF)',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
            'validation_groups' => ['Default'],
        ]);
    }
}
