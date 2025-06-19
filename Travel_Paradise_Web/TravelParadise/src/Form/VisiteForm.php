<?php
// src/Form/VisiteType.php

namespace App\Form;

use App\Entity\Visite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType; // Importe FileType
use Symfony\Component\Validator\Constraints\File; // Pour les contraintes de validation
// ... autres imports (EntityType pour le guide, DateTimeType, etc.)

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('date') // Assure-toi que le type est correct (DateTimeType ou DateType)
            ->add('heure') // Assure-toi que le type est correct (DateTimeType ou TimeType)
            ->add('dureeMinutes')
            ->add('prix')
            ->add('guide') // Assure-toi que c'est un champ EntityType
            // Ajoute le champ pour l'upload de fichier
            ->add('imageFile', FileType::class, [
                'label' => 'Image de la Visite (JPG, PNG)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k', // Taille maximale du fichier (exemple 2MB)
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif', // Ajoute d'autres types si nécessaire
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF).',
                    ])
                ],
            ])
            // ... autres champs ...
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}
