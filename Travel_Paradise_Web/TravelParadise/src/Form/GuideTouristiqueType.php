<?php

namespace App\Form;

use App\Entity\GuideTouristique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType; // Pour le statut si tu veux l'afficher
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank; // Importe NotBlank si tu veux valider ici aussi (redondant avec l'entité mais possible)

class GuideTouristiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Nom du guide'], // Exemple de placeholder
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom du guide'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'required' => true, // Rendre le champ requis côté formulaire aussi
                'attr' => ['placeholder' => 'email@example.com'],
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone',
                'required' => false, // Le téléphone est optionnel dans l'entité
                'attr' => ['placeholder' => 'Ex: +33 6 12 34 56 78'],
            ])
            ->add('paysAffectation', TextType::class, [
                'label' => 'Pays d\'affectation',
                'attr' => ['placeholder' => 'Ex: France, Espagne'],
            ])
            ->add('photoFile', FileType::class, [
                'label' => 'Photo (JPG, PNG)',
                'mapped' => false, // Ce champ ne correspond pas directement à une propriété de l'entité
                'required' => false, // L'upload de photo est optionnel
                'constraints' => [
                    new File([
                        'maxSize' => '2048k', // Augmente la taille max si nécessaire
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif', // Ajoute d'autres types si tu veux
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF)',
                    ])
                ],
            ])
            // Ajoute le champ statut si tu veux le gérer dans le formulaire
            ->add('statut', CheckboxType::class, [
                 'label' => 'Actif',
                 'required' => false, // Le statut est géré par défaut dans l'entité
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GuideTouristique::class,
            'validation_groups' => ['Default'], // Assure-toi que les contraintes de l'entité sont utilisées
        ]);
    }
}
