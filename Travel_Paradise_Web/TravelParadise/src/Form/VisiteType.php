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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'attr' => ['placeholder' => 'Ex: France'],
                'required' => true,
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Lieu',
                'attr' => ['placeholder' => 'Ex: Paris'],
                'required' => true,
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                // CES DEUX LIGNES DOIVENT ÊTRE SUPPRIMÉES
                // 'widget' => 'single_text',
                // 'html5' => true,
                'required' => true,
            ])
            ->add('heureDebut', TimeType::class, [
                'label' => 'Heure de début',
                // CES DEUX LIGNES DOIVENT ÊTRE SUPPRIMÉES
                // 'widget' => 'single_text',
                // 'html5' => true,
                'required' => true,
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (en heures)',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: 3',
                    'min' => 1,
                ],
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'attr' => ['placeholder' => 'Ajoutez un commentaire...'],
                'required' => false,
            ])
            ->add('guide', EntityType::class, [
                'class' => GuideTouristique::class,
                'choice_label' => function(GuideTouristique $guide) {
                    return $guide->getNom() . ' ' . $guide->getPrenom();
                },
                'placeholder' => 'Sélectionnez un guide',
                'label' => 'Guide touristique',
                'required' => true,
            ])
             ->add('photoFile', FileType::class, [
                'label' => 'Photo (JPG, PNG, GIF)',
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
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF).',
                    ])
                ],
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
                'scale' => 2,
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: 25.50',
                    'min' => 0,
                    'step' => 0.01,
                ],
            ])
             ->add('nombreMaxVisiteurs', IntegerType::class, [
                'label' => 'Nombre maximum de visiteurs',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Max: 15',
                    'min' => 1,
                    'max' => 15,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}