<?php

namespace App\DataFixtures;

use App\Entity\GuideTouristique;
use App\Entity\Visite;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $countries = ['France', 'Italie', 'Espagne', 'Japon', 'États-Unis', 'Canada', 'Australie', 'Brésil', 'Inde', 'Thaïlande'];
        $guideNames = [
            ['nom' => 'Dupont', 'prenom' => 'Jean'],
            ['nom' => 'Martin', 'prenom' => 'Sophie'],
            ['nom' => 'Bernard', 'prenom' => 'Pierre'],
            ['nom' => 'Dubois', 'prenom' => 'Marie'],
            ['nom' => 'Petit', 'prenom' => 'Luc'],
        ];

        for ($i = 0; $i < 5; $i++) {
            $guide = new GuideTouristique();
            $guide->setNom($guideNames[$i]['nom']);
            $guide->setPrenom($guideNames[$i]['prenom']);
            $guide->setPaysAffectation($countries[$i]);
            $guide->setDescription($faker->text(150));

            $email = strtolower($guideNames[$i]['prenom'] . '.' . $guideNames[$i]['nom'] . '@example.com');
            $guide->setEmail($email);

            $hashedPassword = $this->passwordHasher->hashPassword($guide, 'password123');
            $guide->setPassword($hashedPassword);

            $userReferenceIndex = $faker->numberBetween(0, 4);
            $userReference = 'user-' . $userReferenceIndex;

            if ($this->hasReference($userReference, User::class)) {
                $user = $this->getReference($userReference, User::class);
                $guide->setUser($user);
            }

            $manager->persist($guide);
            $this->addReference('guide-' . $i, $guide);
        }

        $currentYear = date('Y');

        for ($i = 0; $i < 50; $i++) {
            $visite = new Visite();
            $guide = $this->getReference('guide-' . $faker->numberBetween(0, 4), GuideTouristique::class);
            $visite->setGuide($guide);

            $visite->setPays($countries[$faker->numberBetween(0, 9)]);
            $visite->setLieu($faker->city());

            $randomDay = $faker->numberBetween(1, 28);
            $randomMonth = $faker->numberBetween(1, 12);
            $visite->setDate(new \DateTime(sprintf('%d-%02d-%02d', $currentYear, $randomMonth, $randomDay)));

            $visite->setHeureDebut(new \DateTime($faker->time()));

            $visite->setDuree($faker->numberBetween(1, 8));

            $visite->setCommentaire($faker->sentence());

            $visite->setPrix($faker->randomFloat(2, 50, 500));

            $visite->setNombreMaxVisiteurs($faker->numberBetween(5, 30));

            $statuts = ['planifiée', 'en cours', 'terminée', 'annulée'];
            $visite->setStatut($statuts[$faker->numberBetween(0, 3)]);

            $manager->persist($visite);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
