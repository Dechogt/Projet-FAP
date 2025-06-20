<?php

namespace App\Repository;

use App\Entity\GuideTouristique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

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
     *
     * @param string $searchTerm Le terme de recherche saisi par l'utilisateur.
     * @return QueryBuilder Le QueryBuilder configuré pour la recherche.
     */
    public function searchQuery(string $searchTerm): QueryBuilder
    {
        $qb = $this->createQueryBuilder('g');

        if ($searchTerm) {
            // Ajoute des conditions de recherche. Adapte les champs selon ton entité GuideTouristique.
            // Ici, on cherche dans le nom et le prénom (supposons que tu aies ces champs).
            // L'utilisation de LIKE et % permet une recherche partielle.
            // Les paramètres nommés (:searchTerm) sont importants pour éviter les injections SQL.
            $qb->andWhere(
                    $qb->expr()->like('LOWER(g.nom)', ':searchTerm') .
                    ' OR ' .
                    $qb->expr()->like('LOWER(g.prenom)', ':searchTerm')
                    // Ajoute d'autres champs si tu veux chercher ailleurs (ex: description, spécialités)
                    // . ' OR ' . $qb->expr()->like('LOWER(g.description)', ':searchTerm')
                )
               ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%'); // Convertit le terme en minuscules pour une recherche insensible à la casse
        }

        // Par guides actifs)
        $qb->andWhere('g.statut = :actif')
           ->setParameter('actif', true);


        // Retourne le QueryBuilder. Le contrôleur ou le paginator l'utilisera ensuite.
        return $qb;
    }
}
