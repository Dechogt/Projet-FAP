<?php

namespace App\DataFixtures;

use App\Entity\GuideTouristique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class GuideTouristiqueFixture extends Fixture
{

    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Guide 1
        $guide1 = new GuideTouristique();
        $guide1->setNom('Dupont');
        $guide1->setPrenom('JeaU');
        $guide1->setEmail('jeaU.dupont@example.com');
        $guide1->setTelephone('0123456789');
        $guide1->setPaysAffectation('France');
        $guide1->setPassword($this->passwordHasher->hashPassword($guide1, 'password123'));
        $manager->persist($guide1);

        // Guide 2
        $guide2 = new GuideTouristique();
        $guide2->setNom('Martin');
        $guide2->setPrenom('Sophi');
        $guide2->setEmail('sophi.martin@example.com');
        $guide2->setTelephone('0987654321');
        $guide2->setPaysAffectation('Espagne');
        $guide2->setPassword($this->passwordHasher->hashPassword($guide2, 'password456'));
        $manager->persist($guide2);

        // Guide 3
        $guide3 = new GuideTouristique();
        $guide3->setNom('Bernard');
        $guide3->setPrenom('Paulin');
        $guide3->setEmail('paulin.bernard@example.com');
        $guide3->setTelephone('0555555555');
        $guide3->setPaysAffectation('Italie');
        $guide3->setPassword($this->passwordHasher->hashPassword($guide3, 'password789'));
        $manager->persist($guide3);

        // Ajoute d'autres guides si nécessaire, en utilisant les méthodes disponibles dans ton entité

        $manager->flush(); // Envoie toutes les entités persistées à la base de données
    }
}
