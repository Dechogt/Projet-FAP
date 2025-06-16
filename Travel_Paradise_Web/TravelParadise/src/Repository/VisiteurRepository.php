<?php

namespace App\Repository;

use App\Entity\Visiteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Visiteur>
 */
class VisiteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visiteur::class);
    }

    /**
     * Calcule le taux de présence global
     */
    public function getTauxPresence(): float
    {
        $result = $this->createQueryBuilder('vis')
            ->select('
                COUNT(vis.id) as total_visiteurs,
                SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) as presents
            ')
            ->join('vis.visite', 'v')
            ->getQuery()
            ->getSingleResult();
        
        $total = (int)$result['total_visiteurs'];
        $presents = (int)$result['presents'];
        
        return $total > 0 ? ($presents / $total) * 100 : 0.0;
    }

    /**
     * Calcule le taux de présence par mois
     */
    public function getTauxPresenceParMois(): array
    {
        return $this->createQueryBuilder('vis')
            ->select('
                MONTH(v.date) as month,
                YEAR(v.date) as year,
                COUNT(vis.id) as total_visiteurs,
                SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) as presents,
                (SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) / COUNT(vis.id)) * 100 as taux_presence
            ')
            ->join('vis.visite', 'v')
            ->groupBy('year, month')
            ->orderBy('year, month', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Version alternative si MONTH() ne fonctionne pas avec votre base de données
     */
    public function getTauxPresenceParMoisAlternative(): array
    {
        // Récupération de toutes les données
        $visiteurs = $this->createQueryBuilder('vis')
            ->select('vis.present, v.date')
            ->join('vis.visite', 'v')
            ->getQuery()
            ->getResult();

        // Traitement en PHP
        $statistiques = [];
        
        foreach ($visiteurs as $visiteur) {
            $date = $visiteur['date'];
            if ($date instanceof \DateTimeInterface) {
                $annee = $date->format('Y');
                $mois = $date->format('m');
                $key = $annee . '-' . $mois;
                
                if (!isset($statistiques[$key])) {
                    $statistiques[$key] = [
                        'year' => (int)$annee,
                        'month' => (int)$mois,
                        'total_visiteurs' => 0,
                        'presents' => 0,
                        'taux_presence' => 0
                    ];
                }
                
                $statistiques[$key]['total_visiteurs']++;
                if ($visiteur['present']) {
                    $statistiques[$key]['presents']++;
                }
            }
        }

        // Calcul du taux de présence
        foreach ($statistiques as &$stat) {
            if ($stat['total_visiteurs'] > 0) {
                $stat['taux_presence'] = ($stat['presents'] / $stat['total_visiteurs']) * 100;
            }
        }

        // Tri par année et mois
        ksort($statistiques);
        
        return array_values($statistiques);
    }

    /**
     * Taux de présence pour aujourd'hui
     */
    public function getTauxPresenceAujourdhui(): float
    {
        $today = new \DateTimeImmutable('today');
        $tomorrow = $today->modify('+1 day');

        $result = $this->createQueryBuilder('vis')
            ->select('
                COUNT(vis.id) as total_visiteurs,
                SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) as presents
            ')
            ->join('vis.visite', 'v')
            ->where('v.date >= :today')
            ->andWhere('v.date < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleResult();
        
        $total = (int)$result['total_visiteurs'];
        $presents = (int)$result['presents'];
        
        return $total > 0 ? ($presents / $total) * 100 : 0.0;
    }

    //    /**
    //     * @return Visiteur[] Returns an array of Visiteur objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Visiteur
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}