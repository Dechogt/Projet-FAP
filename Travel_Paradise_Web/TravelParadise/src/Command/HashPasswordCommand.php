<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
// Ajoute cette ligne pour pouvoir utiliser une classe User fictive
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[AsCommand(
    name: 'app:hash-password',
    description: 'Hashes a password using Symfony\'s password encoder.',
)]
class HashPasswordCommand extends Command
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->passwordHasher = $passwordHasher;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('password', InputArgument::REQUIRED, 'The password to hash')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $plainPassword = $input->getArgument('password');

        // Créer un objet utilisateur fictif qui implémente l'interface requise
        // Ce n'est pas un vrai utilisateur, juste un objet pour satisfaire le type hint.
        $user = new class implements PasswordAuthenticatedUserInterface {
            public function getPassword(): ?string { return null; } // Pas besoin de vrai mot de passe ici
            public function eraseCredentials(): void {} // Pas besoin de supprimer des identifiants
            public function getUserIdentifier(): string { return 'dummy_user'; } // Un identifiant fictif
        };

        $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);

        $output->writeln('Hashed password:');
        $output->writeln($hashedPassword);

        return Command::SUCCESS;
    }
}