<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Pour les rôles
use Symfony\Component\Form\Extension\Core\Type\PasswordType; // Pour le mot de passe
use Symfony\Component\Form\Extension\Core\Type\RepeatedType; // Pour la confirmation du mot de passe
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'attr' => ['placeholder' => 'email@example.com'],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => false,
                'attr' => ['placeholder' => 'Nom de l\'utilisateur'],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
                'attr' => ['placeholder' => 'Prénom de l\'utilisateur'],
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Rôles',
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                    // Ajoute d'autres rôles si tu en as
                ],
                'multiple' => true, // Permet de sélectionner plusieurs rôles
                'expanded' => true, // Affiche les rôles comme des checkboxes
            ]);

        // Ajoute le champ mot de passe seulement si on est en mode création (pas d'ID)
        // ou si on est en mode édition et que le champ n'est pas mappé
        if (!$options['is_edit'] || ($options['is_edit'] && !$options['data']->getId())) {
             $builder->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false, // Ce champ n'est pas mappé à l'entité
                'required' => $options['is_edit'] ? false : true, // Requis seulement en création
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmer le mot de passe'],
                'invalid_message' => 'Les mots de passe doivent correspondre.',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères.',
                        'max' => 4096, // Longueur max pour Symfony Security
                    ]),
                    // NotBlank est géré par le groupe de validation 'registration' dans l'entité
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => function (UserType $form) {
                // Applique le groupe 'registration' si le champ plainPassword est présent
                return $form->get('plainPassword')->isSubmitted() ? ['Default', 'registration'] : ['Default'];
            },
            'is_edit' => false, // Option personnalisée pour savoir si on est en mode édition
        ]);
    }
}
