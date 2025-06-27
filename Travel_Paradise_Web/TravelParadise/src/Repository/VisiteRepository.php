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
    public function getVisitesToday(): array
    {
        $today = new \DateTimeImmutable('today');
        $tomorrow = $today->modify('+1 day');

        return $this->createQueryBuilder('v')
            ->where('v.date >= :today')
            ->andWhere('v.date < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les visites à venir dans les prochains X jours
     * @return Visite[] Returns an array of Visite objects
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
     * Traitement des données en PHP pour une meilleure compatibilité avec PostgreSQL
     * @return array Returns an array of arrays with 'annee', 'mois', 'total'
     */
    public function getVisitesParMoisSimple(int $months = 12): array
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
                $mois = $date->format('n'); // Format 'n' sans zéro initial pour correspondre au contrôleur
                $key = $annee . '-' . sprintf('%02d', $mois); // Clé pour trier

                if (!isset($statistiques[$key])) {
                    $statistiques[$key] = [
                        'annee' => (int)$annee,
                        'month' => (int)$mois, // 'month' pour correspondre au contrôleur
                        'count' => 0 // 'count' pour correspondre au contrôleur
                    ];
                }
                $statistiques[$key]['count']++;
            }
        }

        // Tri par année et mois
        ksort($statistiques);

        return array_values($statistiques);
    }

    /**
     * NOUVELLE MÉTHODE: Récupère le nombre de visites par mois pour les graphiques
     * Cette méthode est appelée par le contrôleur AdminController
     * @return array Returns an array with month and count keys
     */
    public function getVisitsPerMonth(): array
    {
        return $this->getVisitesParMoisSimple(12);
    }

    /**
     * NOUVELLE MÉTHODE: Récupère le nombre de visites par pays pour les graphiques
     * ATTENTION: Adaptez cette méthode selon votre structure de base de données
     * @return array Returns an array of arrays with 'country' and 'count'
     */
    public function getVisitsByCountry(): array
    {
        // OPTION 1: Si vous avez un champ 'pays' dans votre entité Visite
        // Décommentez cette version si c'est le cas:
        /*
        return $this->createQueryBuilder('v')
            ->select('v.pays AS country, COUNT(v.id) AS count')
            ->where('v.pays IS NOT NULL')
            ->groupBy('v.pays')
            ->orderBy('count', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
        */

        // OPTION 2: Si vous avez un champ pays dans l'entité Visiteur
        // Décommentez cette version si c'est le cas:
        /*
        return $this->createQueryBuilder('v')
            ->select('vi.pays AS country, COUNT(v.id) AS count')
            ->join('v.visiteur', 'vi')
            ->where('vi.pays IS NOT NULL')
            ->groupBy('vi.pays')
            ->orderBy('count', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
        */

        // DONNÉES D'EXEMPLE (à supprimer une fois que vous avez implémenté une des options ci-dessus)
        // Cette méthode retourne des données factices pour que le graphique fonctionne
        throw new \Exception("Méthode getVisitsByCountry() non implémentée. Veuillez décommenter et adapter une des options selon votre structure de base de données.");
    }

    /**
     * Récupère le top guides ayant le plus de visites
     * @return array Returns an array of arrays with 'guide', 'total'
     */
    public function getVisitesParGuide(int $limit = 10): array
    {
        return $this->createQueryBuilder('v')
            ->select('g.nom AS guide_nom, g.prenom AS guide_prenom, COUNT(v.id) AS total')
            ->join('v.guide', 'g')
            ->groupBy('g.id, g.nom, g.prenom')
            ->orderBy('total', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère le nombre de visites par mois pour les graphiques.
     * Utilise getVisitesParMoisSimple pour la compatibilité.
     * @return array Returns an array with 'labels' and 'data' for Chart.js
     */
    public function countVisitsPerMonth(int $months = 6): array
    {
        $monthlyStats = $this->getVisitesParMoisSimple($months);

        $labels = [];
        $data = [];

        // Noms des mois en français
        $monthNames = [
            1 => 'Jan', 2 => 'Fév', 3 => 'Mar', 4 => 'Avr',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juil', 8 => 'Août',
            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Déc'
        ];

        foreach ($monthlyStats as $stat) {
            $monthLabel = $monthNames[$stat['month']] . ' ' . $stat['annee'];
            $labels[] = $monthLabel;
            $data[] = $stat['count'];
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Récupère les tendances mensuelles.
     * @return array Returns an array of arrays with 'annee', 'mois', 'total'
     */
    public function getMonthlyTrends(int $months = 6): array
    {
        return $this->getVisitesParMoisSimple($months);
    }

    /**
     * Récupère les visites pour une date spécifique.
     * @return Visite[] Returns an array of Visite objects
     */
    public function getVisitesByDate(\DateTimeInterface $date): array
    {
        $startOfDay = \DateTimeImmutable::createFromInterface($date)->setTime(0, 0);
        $endOfDay = $startOfDay->modify('+1 day');

        return $this->createQueryBuilder('v')
            ->where('v.date >= :startOfDay')
            ->andWhere('v.date < :endOfDay')
            ->setParameter('startOfDay', $startOfDay)
            ->setParameter('endOfDay', $endOfDay)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les visites pour un guide spécifique.
     * @param int $guideId L'ID du guide
     * @return Visite[] Returns an array of Visite objects
     */
    public function getVisitesByGuide(int $guideId): array
    {
        return $this->createQueryBuilder('v')
            ->join('v.guide', 'g')
            ->where('g.id = :guideId')
            ->setParameter('guideId', $guideId)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les visites pour un visiteur spécifique.
     * @param int $visiteurId L'ID du visiteur
     * @return Visite[] Returns an array of Visite objects
     */
    public function getVisitesByVisiteur(int $visiteurId): array
    {
        return $this->createQueryBuilder('v')
            ->join('v.visiteur', 'vis')
            ->where('vis.id = :visiteurId')
            ->setParameter('visiteurId', $visiteurId)
            ->getQuery()
            ->getResult();
    }
}
