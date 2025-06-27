<?php

namespace App\Repository;

use App\Entity\GuideTouristique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\ResultSetMapping; // Potentiellement utile pour des requêtes SQL natives complexes

/**
 * @extends ServiceEntityRepository<GuideTouristique>
 */
class GuideTouristiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GuideTouristique::class);
    }

    /**
     * Méthode pour rechercher des guides touristiques par nom ou prénom.
     * Retourne un QueryBuilder pour permettre la pagination ou d'autres traitements.
     *
     * @param string $searchTerm Le terme de recherche saisi par l'utilisateur.
     * @return QueryBuilder Le QueryBuilder configuré pour la recherche.
     */
    public function searchQuery(string $searchTerm): QueryBuilder
    {
        $qb = $this->createQueryBuilder('g');

        if ($searchTerm) {
            // Adapte les champs selon ton entité GuideTouristique.
            // Ici, on cherche dans le nom et le prénom.
            $qb->andWhere(
                    $qb->expr()->like('LOWER(g.nom)', ':searchTerm') .
                    ' OR ' .
                    $qb->expr()->like('LOWER(g.prenom)', ':searchTerm')
                    // Ajoute d'autres champs si tu veux chercher ailleurs (ex: description, spécialités)
                    // . ' OR ' . $qb->expr()->like('LOWER(g.description)', ':searchTerm')
                )
               ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%');
        }

        // Filtre par guides actifs (assure-toi que la propriété 'statut' existe)
        $qb->andWhere('g.statut = :actif')
           ->setParameter('actif', true);

        // Retourne le QueryBuilder. Le contrôleur ou le paginator l'utilisera ensuite.
        return $qb;
    }

    /**
     * Récupère le nombre de visites pour chaque guide touristique.
     * Retourne un tableau d'arrays avec le nom du guide et le nombre total de ses visites.
     *
     * @param int $limit Le nombre maximum de guides à retourner.
     * @return array Returns an array of arrays with 'guide_nom', 'guide_prenom', 'total_visites'
     */
    public function findTopGuidesWithVisitCount(int $limit = 5): array
    {
        // Assumons que ton entité GuideTouristique a une relation ManyToOne nommée 'visites'
        // vers ton entité Visite (ou que Visite a une relation ManyToOne vers GuideTouristique nommée 'guide').
        // On va utiliser la relation depuis Visite vers GuideTouristique car c'est là que la clé étrangère est.
        // Si ta relation est nommée différemment, adapte 'v.guide'.

        // On utilise une requête DQL qui joint Visite et GuideTouristique.
        // On sélectionne le nom et prénom du guide, et on compte les visites associées.
        return $this->createQueryBuilder('g') // Alias 'g' pour GuideTouristique
            ->select('g.nom AS guide_nom, g.prenom AS guide_prenom, COUNT(v.id) AS total_visites')
            ->join('App\Entity\Visite', 'v', 'WITH', 'v.guide = g.id') // Jointure avec Visite (alias 'v') sur la relation 'guide'
            ->groupBy('g.id, g.nom, g.prenom') // GROUP BY nécessaire pour PostgreSQL si on sélectionne des champs du guide
            ->orderBy('total_visites', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult(); // Retourne un tableau d'arrays, ex: [['guide_nom' => 'Jean', 'guide_prenom' => 'Dupont', 'total_visites' => 15], ...]
    }

    /**
     * Compte le nombre de guides actifs.
     * @return int
     */
    public function countActiveGuides(): int
    {
        return $this->createQueryBuilder('g')
            ->select('COUNT(g.id)')
            ->where('g.statut = :actif')
            ->setParameter('actif', true)
            ->getQuery()
            ->getSingleScalarResult(); // Retourne une seule valeur (le compte)
    }

    // --- Tu peux ajouter d'autres méthodes utiles ici ---

    /**
     * Récupère un guide par son ID.
     * @param int $id
     * @return GuideTouristique|null
     */
    public function findById(int $id): ?GuideTouristique
    {
        return $this->find($id);
    }

    /**
     * Récupère un guide par son nom et prénom (utile si ces champs sont uniques).
     * @param string $nom
     * @param string $prenom
     * @return GuideTouristique|null
     */
    public function findByName(string $nom, string $prenom): ?GuideTouristique
    {
        return $this->createQueryBuilder('g')
            ->where('g.nom = :nom')
            ->andWhere('g.prenom = :prenom')
            ->setParameters([
                'nom' => $nom,
                'prenom' => $prenom
            ])
            ->getQuery()
            ->getOneOrNullResult();
    }
}
