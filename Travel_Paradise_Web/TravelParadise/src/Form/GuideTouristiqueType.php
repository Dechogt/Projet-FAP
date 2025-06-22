<?php

namespace App\Form;

use App\Entity\GuideTouristique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;

class GuideTouristiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Nom du guide'],
                'required' => true,
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom du guide'],
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'required' => true,
                'attr' => ['placeholder' => 'email@example.com'],
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse e-mail ne peut pas être vide.']),
                    new Email(['message' => 'Veuillez saisir une adresse e-mail valide.']),
                ],
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => ['placeholder' => 'Ex: +33 6 12 34 56 78'],
            ])
            // Ajout du champ mot de passe avec confirmation
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['placeholder' => 'Saisissez le mot de passe'],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => ['placeholder' => 'Confirmez le mot de passe'],
                ],
                'invalid_message' => 'Les champs du mot de passe doivent correspondre.',
                'mapped' => false,
                // Utilise l'option 'is_new' pour rendre le champ obligatoire uniquement lors de la création
                'required' => $options['is_new'],
                'constraints' => [
                    // Applique NotBlank uniquement si le champ est requis (lors de la création)
                    // La contrainte NotBlank est gérée par le 'required' du champ RepeatedType
                    // new NotBlank([
                    //     'message' => 'Veuillez saisir un mot de passe.',
                    // ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères.',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('paysAffectation', TextType::class, [
                'label' => 'Pays d\'affectation',
                'attr' => ['placeholder' => 'Ex: France, Espagne'],
                'required' => false,
            ])
            ->add('photoFile', FileType::class, [
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
            ->add('statut', CheckboxType::class, [
                 'label' => 'Actif',
                 'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GuideTouristique::class,
            // --- Déclaration de l'option personnalisée 'is_new' ---
            'is_new' => true, // Définit l'option 'is_new' avec une valeur par défaut à true
            // --- Fin de la déclaration ---
            'validation_groups' => ['Default'],
        ]);
    }
}
