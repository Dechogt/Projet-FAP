<?php

namespace App\Repository;

use App\Entity\Visite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Visite>
 */
class VisiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visite::class);
    }

    /**
     * Récupère les visites prévues pour aujourd'hui.
     * @return Visite[] Returns an array of Visite objects
     */
    public function getVisitesToday(): array // Change le type de retour à array
    {
        $today = new \DateTimeImmutable('today');
        $tomorrow = $today->modify('+1 day');

        return $this->createQueryBuilder('v')
            // Ne sélectionne pas COUNT(v.id), sélectionne l'entité entière (par défaut)
            ->where('v.date >= :today')
            ->andWhere('v.date < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getResult(); // Utilise getResult() pour retourner un tableau
    }

    /**
     * Récupère les visites à venir dans les prochains X jours
     */
    public function getVisitesProchaines(int $days): array
    {
        $today = new \DateTimeImmutable('today');
        $endDate = $today->modify("+$days days");

        return $this->createQueryBuilder('v')
            ->where('v.date >= :today')
            ->andWhere('v.date < :endDate')
            ->setParameter('today', $today)
            ->setParameter('endDate', $endDate)
            ->orderBy('v.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques de visites par mois (pour les X derniers mois)
     * VERSION RECOMMANDÉE - Fonctionne à 100%
     */
    public function getVisitesParMois(int $months): array
    {
        $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
        $startDate = $startDate->setTime(0, 0);

        // Récupération simple des visites
        $visites = $this->createQueryBuilder('v')
            ->select('v.date')
            ->where('v.date >= :startDate')
            ->setParameter('startDate', $startDate)
            ->getQuery()
            ->getResult();

        // Traitement en PHP pour grouper par mois
        $statistiques = [];

        foreach ($visites as $visite) {
            $date = $visite['date'];
            if ($date instanceof \DateTimeInterface) {
                $annee = (int)$date->format('Y');
                $mois = (int)$date->format('n'); // n = mois sans zéro initial
                $key = $annee . '-' . sprintf('%02d', $mois);

                if (!isset($statistiques[$key])) {
                    $statistiques[$key] = [
                        'annee' => $annee,
                        'mois' => $mois,
                        'total' => 0
                    ];
                }
                $statistiques[$key]['total']++;
            }
        }

        // Tri par année et mois
        ksort($statistiques);

        return array_values($statistiques);
    }

    /**
     * Alternative avec DQL utilisant DATE_FORMAT (compatible avec certaines versions)
     */
    public function getVisitesParMoisAlternative(int $months): array
    {
        $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
        $startDate = $startDate->setTime(0, 0);

        return $this->createQueryBuilder('v')
            ->select('
                SUBSTRING(v.date, 1, 4) AS annee,
                SUBSTRING(v.date, 6, 2) AS mois,
                COUNT(v.id) AS total
            ')
            ->where('v.date >= :startDate')
            ->setParameter('startDate', $startDate)
            ->groupBy('annee, mois')
            ->orderBy('annee, mois', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Version la plus simple et la plus compatible
     * Traitement des données en PHP plutôt qu'en base
     */
    public function getVisitesParMoisSimple(int $months): array
    {
        $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
        $startDate = $startDate->setTime(0, 0);

        // Récupération de toutes les visites depuis la date de début
        $visites = $this->createQueryBuilder('v')
            ->select('v.date')
            ->where('v.date >= :startDate')
            ->setParameter('startDate', $startDate)
            ->getQuery()
            ->getResult();

        // Traitement en PHP pour grouper par mois
        $statistiques = [];

        foreach ($visites as $visite) {
            $date = $visite['date'];
            if ($date instanceof \DateTimeInterface) {
                $annee = $date->format('Y');
                $mois = $date->format('m');
                $key = $annee . '-' . $mois;

                if (!isset($statistiques[$key])) {
                    $statistiques[$key] = [
                        'annee' => (int)$annee,
                        'mois' => (int)$mois,
                        'total' => 0
                    ];
                }
                $statistiques[$key]['total']++;
            }
        }

        // Tri par année et mois
        ksort($statistiques);

        return array_values($statistiques);
    }

    /**
     * Récupère le top guides ayant le plus de visites
     */
    public function getVisitesParGuide(int $limit = 10): array
    {
        return $this->createQueryBuilder('v')
            ->select('g.nom AS guide, COUNT(v.id) AS total')
            ->join('v.guide', 'g')
            ->groupBy('g.id, g.nom')  // Ajout de g.nom dans le GROUP BY pour PostgreSQL
            ->orderBy('total', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    // --- Ajoute les méthodes manquantes utilisées dans AdminController si elles ne sont pas déjà là ---

    /**
     * Récupère le nombre de visites par mois (pour les graphiques)
     * Retourne un tableau adapté pour Chart.js (labels et data)
     */
    public function countVisitsPerMonth(int $months = 6): array
    {
        $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
        $startDate = $startDate->setTime(0, 0);

        // Utilise la version simple qui traite en PHP pour la compatibilité
        $monthlyStats = $this->getVisitesParMoisSimple($months);

        $labels = [];
        $data = [];

        // Formate les données pour Chart.js
        foreach ($monthlyStats as $stat) {
            // Utilise le numéro du mois pour créer un objet DateTime et formater le nom du mois
            $dateObj = \DateTime::createFromFormat('!m', $stat['mois']);
            $monthName = $dateObj->format('M'); // Ex: Jan, Fév, Mar

            $labels[] = $monthName . ' ' . $stat['annee']; // Ex: Jan 2023
            $data[] = $stat['total'];
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Récupère le nombre de visites par pays (pour les graphiques)
     * Retourne un tableau adapté pour Chart.js (labels et data)
     */
    public function countVisitsByCountry(): array
    {
        // Supposons que ton entité Visite a une relation avec une entité Pays
        // ou une propriété 'pays' (string)
        // Si tu as une relation, adapte la jointure et le groupement
        // Si tu as une propriété string 'pays', la requête est plus simple

        // Exemple si Visite a une propriété 'pays' (string)
        return $this->createQueryBuilder('v')
            ->select('v.pays AS country, COUNT(v.id) AS total')
            ->groupBy('v.pays')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();

        // Exemple si Visite a une relation ManyToOne avec une entité Pays (nommée 'country')
        /*
        return $this->createQueryBuilder('v')
            ->select('c.nom AS country, COUNT(v.id) AS total')
            ->join('v.country', 'c') // Adapte 'country' au nom de ta relation
            ->groupBy('c.id, c.nom') // Adapte 'c.id, c.nom' aux propriétés de ton entité Pays
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();
        */
    }

    /**
     * Récupère les tendances mensuelles (peut-être le nombre de nouvelles visites créées chaque mois ?)
     * Adapte cette méthode à ce que tu entends par "tendances mensuelles"
     */
    public function getMonthlyTrends(int $months = 6): array
    {
         // Exemple : Nombre de visites créées par mois
         $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
         $startDate = $startDate->setTime(0, 0);

         return $this->createQueryBuilder('v')
             ->select('
                 SUBSTRING(v.createdAt, 1, 4) AS annee,
                 SUBSTRING(v.createdAt, 6, 2) AS mois,
                 COUNT(v.id) AS total
             ')
             ->where('v.createdAt >= :startDate') // Assure-toi d'avoir une propriété 'createdAt'
             ->setParameter('startDate', $startDate)
             ->groupBy('annee, mois')
             ->orderBy('annee, mois', 'ASC')
             ->getQuery()
             ->getResult();

         // Adapte la requête si "tendances mensuelles" signifie autre chose
    }
}
