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
     * Récupère le nombre de visites prévues aujourd'hui
     */
    public function getVisitesToday(): int
    {
        $today = new \DateTimeImmutable('today');
        $tomorrow = $today->modify('+1 day');

        return $this->createQueryBuilder('v')
            ->select('COUNT(v.id)')
            ->where('v.date >= :today')
            ->andWhere('v.date < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
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
}