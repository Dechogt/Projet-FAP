<?php

namespace App\Repository;

use App\Entity\Visite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping; // Potentiellement utile pour des requêtes SQL natives complexes, mais on va l'éviter ici si possible

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
            // On sélectionne l'entité entière (par défaut)
            ->where('v.date >= :today')
            ->andWhere('v.date < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getResult(); // Utilise getResult() pour retourner un tableau d'objets Visite
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
            ->getResult(); // Utilise getResult() pour retourner un tableau d'objets Visite
    }

    /**
     * Récupère les statistiques de visites par mois (pour les X derniers mois)
     * Traitement des données en PHP pour une meilleure compatibilité avec PostgreSQL
     * @return array Returns an array of arrays with 'annee', 'mois', 'total'
     */
    public function getVisitesParMoisSimple(int $months): array
    {
        $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
        $startDate = $startDate->setTime(0, 0);

        // Récupération de toutes les visites depuis la date de début
        // On sélectionne seulement la date pour optimiser la requête
        $visites = $this->createQueryBuilder('v')
            ->select('v.date')
            ->where('v.date >= :startDate')
            ->setParameter('startDate', $startDate)
            ->getQuery()
            ->getResult(); // Retourne un tableau d'arrays, ex: [['date' => DateTimeImmutable], ...]

        // Traitement en PHP pour grouper par mois
        $statistiques = [];

        foreach ($visites as $visite) {
            $date = $visite['date']; // Récupère l'objet DateTimeImmutable
            if ($date instanceof \DateTimeInterface) {
                $annee = $date->format('Y');
                $mois = $date->format('m'); // Format 'mm' avec zéro initial
                $key = $annee . '-' . $mois; // Clé pour grouper, ex: "2023-10"

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

        // Tri par année et mois (basé sur la clé "YYYY-MM")
        ksort($statistiques);

        // Retourne les valeurs sous forme de tableau indexé numériquement
        return array_values($statistiques);
    }

    /**
     * Récupère le top guides ayant le plus de visites
     * @return array Returns an array of arrays with 'guide', 'total'
     */
    public function getVisitesParGuide(int $limit = 10): array
    {
        // Assumons que ton entité Visite a une relation ManyToOne nommée 'guide'
        // vers ton entité GuideTouristique.
        // Assumons que ton entité GuideTouristique a une propriété 'nom'.
        return $this->createQueryBuilder('v')
            ->select('g.nom AS guide, COUNT(v.id) AS total')
            ->join('v.guide', 'g') // Jointure avec l'entité GuideTouristique via la relation 'guide'
            ->groupBy('g.id, g.nom')  // GROUP BY nécessaire pour g.nom en plus de g.id pour PostgreSQL
            ->orderBy('total', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult(); // Retourne un tableau d'arrays, ex: [['guide' => 'Nom Guide', 'total' => 15], ...]
    }

    // --- Méthodes nécessaires pour AdminController (Statistiques) ---

    /**
     * Récupère le nombre de visites par mois pour les graphiques.
     * Utilise getVisitesParMoisSimple pour la compatibilité.
     * @return array Returns an array with 'labels' and 'data' for Chart.js
     */
    public function countVisitsPerMonth(int $months = 6): array
    {
        // Utilise la version simple qui traite en PHP pour la compatibilité
        $monthlyStats = $this->getVisitesParMoisSimple($months);

        $labels = [];
        $data = [];

        // Formate les données pour Chart.js
        foreach ($monthlyStats as $stat) {
            // Utilise le numéro du mois pour créer un objet DateTime et formater le nom du mois
            // Le '!' dans le format indique que le format est strict
            $dateObj = \DateTime::createFromFormat('!m', $stat['mois']);
            // Formate le nom du mois (ex: Jan, Fév) et l'année
            $monthLabel = $dateObj->format('M') . ' ' . $stat['annee'];

            $labels[] = $monthLabel;
            $data[] = $stat['total'];
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    /**
     * Récupère le nombre de visites par pays pour les graphiques.
     * @return array Returns an array of arrays with 'country' and 'total'
     */
    public function countVisitsByCountry(): array
    {
        // !!! IMPORTANT : Adapte cette requête en fonction de comment tu stockes le pays de la visite !!!
        // Option 1 : Si ton entité Visite a une propriété string 'pays'
        return $this->createQueryBuilder('v')
            ->select('v.pays AS country, COUNT(v.id) AS total')
            ->groupBy('v.pays')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();

        // Option 2 : Si ton entité Visite a une relation ManyToOne avec une entité Pays (nommée 'country')
        /*
        return $this->createQueryBuilder('v')
            ->select('p.nom AS country, COUNT(v.id) AS total') // Adapte 'p.nom' au nom du champ dans ton entité Pays
            ->join('v.country', 'p') // Adapte 'v.country' au nom de la relation dans ton entité Visite
            ->groupBy('p.id, p.nom') // Adapte 'p.id, p.nom' aux propriétés de ton entité Pays
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();
        */

        // Décommente l'option qui correspond à ta structure de base de données et adapte les noms de champs/relations si nécessaire.
        // Laisse l'autre option commentée.
    }

    /**
     * Récupère les tendances mensuelles.
     * Cette méthode est souvent utilisée pour montrer l'évolution du nombre de visites sur une période.
     * On va utiliser une approche compatible avec PostgreSQL en extrayant l'année et le mois.
     * @return array Returns an array of arrays with 'annee', 'mois', 'total'
     */
    public function getMonthlyTrends(int $months = 6): array
    {
         // Utilise la même logique que getVisitesParMoisSimple pour la compatibilité
         return $this->getVisitesParMoisSimple($months);

         // --- Alternative utilisant des fonctions SQL/PostgreSQL directement via DQL ---
         // Cette approche est plus performante car le groupement est fait en base de données,
         // mais elle nécessite l'installation d'extensions Doctrine pour les fonctions SQL.
         // Si tu as installé "doctrine/doctrine-extensions-extra", tu pourrais utiliser des fonctions comme DATE_FORMAT.
         // Sinon, tu peux utiliser des fonctions natives PostgreSQL via DQL si elles sont mappées.
         // L'erreur précédente suggérait que SUBSTRING ne fonctionnait pas directement.
         // Utiliser EXTRACT est une meilleure approche DQL compatible PostgreSQL :
         /*
         $startDate = new \DateTimeImmutable('first day of -' . $months . ' months');
         $startDate = $startDate->setTime(0, 0);

         return $this->createQueryBuilder('v')
             ->select('
                 EXTRACT(YEAR FROM v.createdAt) AS annee,
                 EXTRACT(MONTH FROM v.createdAt) AS mois,
                 COUNT(v.id) AS total
             ')
             ->where('v.createdAt >= :startDate') // Assure-toi d'avoir une propriété 'createdAt'
             ->setParameter('startDate', $startDate)
             ->groupBy('annee, mois')
             ->orderBy('annee, mois', 'ASC')
             ->getQuery()
             ->getResult();
         */
         // Si tu utilises la propriété 'date' au lieu de 'createdAt' pour la date de la visite, remplace 'v.createdAt' par 'v.date'.
         // La version simple (traitement PHP) est la plus sûre si tu n'es pas sûr des extensions Doctrine ou des fonctions DQL supportées.
    }


    // --- Ajoute d'autres méthodes utiles si tu en as besoin ---

    /**
     * Compte le nombre total de visites.
     * Cette méthode existe déjà via ServiceEntityRepository, mais c'est un exemple.
     */
    // public function countAll(): int
    // {
    //     return $this->count([]);
    // }

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
        // Assumons que ta relation guide est nommée 'guide'
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
        // Assumons que ta relation visiteur est nommée 'visiteur'
        return $this->createQueryBuilder('v')
            ->join('v.visiteur', 'vis')
            ->where('vis.id = :visiteurId')
            ->setParameter('visiteurId', $visiteurId)
            ->getQuery()
            ->getResult();
    }
}
