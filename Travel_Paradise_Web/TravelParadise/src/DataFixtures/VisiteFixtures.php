<?php

namespace App\DataFixtures;

use App\Entity\Visite;
use App\Entity\GuideTouristique; // Assure-toi d'importer tes entités
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface; // Pour spécifier les dépendances
use Doctrine\Persistence\ObjectManager;
use Faker\Factory; // Pour générer des données aléatoires

class VisiteFixture extends Fixture implements DependentFixtureInterface
{
    // Pour pouvoir référencer les guides créés dans GuideTouristiqueFixture
    public function getDependencies(): array
    {
        return [
            GuideTouristiqueFixture::class,
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); 
        $guide1 = $manager->getRepository(GuideTouristique::class)->findOneBy(['email' => 'jean.dupont@example.com']);
        $guide2 = $manager->getRepository(GuideTouristique::class)->findOneBy(['email' => 'sophie.martin@example.com']);
        $guide3 = $manager->getRepository(GuideTouristique::class)->findOneBy(['email' => 'pierre.bernard@example.com']);

        if (!$guide1 || !$guide2 || !$guide3) {
            throw new \Exception("Impossible de trouver les guides pour créer les visites.");
        }

        // Créer des visites
        for ($i = 0; $i < 50; $i++) { // Crée 50 visites
            $visite = new Visite();
            $visite->setDateVisite($faker->dateTimeBetween('-6 months', 'now')); // Visites dans les 6 derniers mois
            $visite->setPays($faker->country()); // Génère un pays aléatoire
            $visite->setVille($faker->city()); // Génère une ville aléatoire

            // Associer un guide aléatoire
            $guides = [$guide1, $guide2, $guide3];
            $randomGuide = $guides[array_rand($guides)];
            $visite->setGuide($randomGuide);

            $manager->persist($visite);
        }

        $manager->flush();
    }
}
