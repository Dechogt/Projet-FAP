<?php
// src/Form/GuideTouristiqueType.php

namespace App\Form;

use App\Entity\GuideTouristique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType; // Importe FileType
use Symfony\Component\Validator\Constraints\File; // Pour les contraintes de validation

class GuideTouristiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('telephone')
            // Ajoute le champ pour l'upload de fichier
            ->add('photoFile', FileType::class, [
                'label' => 'Photo du Guide (JPG, PNG)',
                // 'mapped' => false signifie que ce champ n'est pas directement lié à une propriété de l'entité
                'mapped' => false,
                // 'required' => false rend l'upload optionnel
                'required' => false,
                // Ajoute des contraintes de validation pour le fichier
                'constraints' => [
                    new File([
                        'maxSize' => '1024k', // Taille maximale du fichier
                        'mimeTypes' => [ // Types MIME autorisés
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image JPG ou PNG valide.',
                    ])
                ],
            ])
            // ... autres champs ...
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GuideTouristique::class,
        ]);
    }
}
