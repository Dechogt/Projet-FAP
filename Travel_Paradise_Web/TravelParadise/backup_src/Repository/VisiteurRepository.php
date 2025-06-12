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
        public function getTauxPresenceParMois(): array
        {
            return $this->createQueryBuilder('vis')
                ->select('
                    MONTH(v.date) as month,
                    COUNT(vis.id) as total_visiteurs,
                    SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) as presents,
                    (SUM(CASE WHEN vis.present = true THEN 1 ELSE 0 END) / COUNT(vis.id)) * 100 as taux_presence
                ')
                ->join('vis.visite', 'v')
                ->groupBy('month')
                ->getQuery()
                ->getResult();
        }


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
