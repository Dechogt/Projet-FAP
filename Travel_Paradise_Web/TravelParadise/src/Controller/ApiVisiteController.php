<?php

namespace App\Controller;

use App\Entity\GuideTouristique; // Assure-toi que le namespace est correct
use App\Repository\VisiteRepository; // Assure-toi que ce repository existe
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\UserInterface; // Pour typer le guide

/**
 * Contrôleur pour gérer les API liées aux visites, spécifiquement pour les guides.
 */
class ApiVisiteController extends AbstractController
{
    // Injection du repository des visites via le constructeur
    public function __construct(
        private VisiteRepository $visiteRepository
    ) {}

    /**
     * Endpoint pour récupérer les visites d'un guide authentifié.
     *
     * Cette route est protégée et nécessite un token JWT valide dans l'en-tête `Authorization`.
     * Elle retourne une liste des visites associées au guide authentifié.
     *
     * @return JsonResponse Une réponse JSON contenant la liste des visites ou un message d'erreur.
     */
    #[Route('/api/guide/visites', name: 'api_guide_visites', methods: ['GET'])]
    public function getGuideVisites(): JsonResponse
    {
        // Récupère l'utilisateur actuellement authentifié.
        // Si le firewall JWT est correctement configuré, $this->getUser() retournera
        // l'objet GuideTouristique correspondant au token.
        $guide = $this->getUser();

        // Vérification de l'authentification et du type d'utilisateur.
        // Si l'utilisateur n'est pas connecté ou n'est pas un GuideTouristique,
        // on retourne une erreur 401 Unauthorized.
        if (!$guide instanceof GuideTouristique) {
            // Utilise JsonResponse::HTTP_UNAUTHORIZED pour le code 401
            return $this->json(['message' => 'Authentification requise ou type d\'utilisateur invalide.'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        // Récupère toutes les visites associées à ce guide.
        // On utilise la méthode findBy du repository, en filtrant sur la relation 'guide'.
        // Note : Si tu veux utiliser les méthodes plus spécifiques du VisiteRepository (ex: findVisitesByGuideAndStatus),
        // tu devras les appeler ici. Pour l'instant, findBy est suffisant pour obtenir toutes les visites.
        $visites = $this->visiteRepository->findBy(['guide' => $guide], ['date' => 'ASC', 'heureDebut' => 'ASC']); // Ajout d'un tri par défaut

        // Prépare un tableau pour stocker les données des visites au format JSON.
        $visitesData = [];
        foreach ($visites as $visite) {
            // Utilise les getters de l'entité Visite pour récupérer les données.
            $visitesData[] = [
                'id' => $visite->getId(),
                'lieu' => $visite->getLieu(),
                // Formate les dates et heures pour qu'elles soient lisibles en JSON.
                // Utilise 'Y-m-d' pour la date et 'H:i:s' pour l'heure.
                'date' => $visite->getDate() ? $visite->getDate()->format('Y-m-d') : null,
                'heureDebut' => $visite->getHeureDebut() ? $visite->getHeureDebut()->format('H:i:s') : null,
                'heureFin' => $visite->getHeureFin() ? $visite->getHeureFin()->format('H:i:s') : null,
                'duree' => $visite->getDuree(),
                'statut' => $visite->getStatut(), // Utilise le champ statut que nous avons ajouté
                'prix' => $visite->getPrix(),
                'nombreMaxVisiteurs' => $visite->getNombreMaxVisiteurs(),
                // Tu peux ajouter ici d'autres informations utiles, par exemple :
                // 'nombreVisiteursInscrits' => count($visite->getVisiteurs()), // Si tu veux le nombre de visiteurs inscrits
            ];
        }

        // Retourne le tableau des visites au format JSON avec un code de succès 200 OK.
        // Le `json()` de AbstractController gère automatiquement le Content-Type: application/json.
        return $this->json($visitesData);
    }

    /**
     * Endpoint pour récupérer une visite spécifique par son ID.
     *
     * @param int $id L'ID de la visite à récupérer.
     * @return JsonResponse Une réponse JSON contenant les détails de la visite ou une erreur 404.
     */
    #[Route('/api/guide/visites/{id}', name: 'api_guide_visite_show', methods: ['GET'])]
    public function getVisiteById(int $id): JsonResponse
    {
        $visite = $this->visiteRepository->find($id);

        // Si la visite n'est pas trouvée, retourne une erreur 404 Not Found.
        if (!$visite) {
            return $this->json(['message' => 'Visite non trouvée.'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Vérifie si la visite appartient bien au guide authentifié.
        // C'est une étape de sécurité importante pour s'assurer qu'un guide ne peut voir que ses propres visites.
        $guide = $this->getUser();
        if (!$guide instanceof GuideTouristique || $visite->getGuide() !== $guide) {
            return $this->json(['message' => 'Accès non autorisé à cette visite.'], JsonResponse::HTTP_FORBIDDEN); // 403 Forbidden
        }

        // Formate les données de la visite pour la réponse JSON.
        $visiteData = [
            'id' => $visite->getId(),
            'lieu' => $visite->getLieu(),
            'pays' => $visite->getPays(),
            'date' => $visite->getDate() ? $visite->getDate()->format('Y-m-d') : null,
            'heureDebut' => $visite->getHeureDebut() ? $visite->getHeureDebut()->format('H:i:s') : null,
            'heureFin' => $visite->getHeureFin() ? $visite->getHeureFin()->format('H:i:s') : null,
            'duree' => $visite->getDuree(),
            'commentaire' => $visite->getCommentaire(),
            'statut' => $visite->getStatut(),
            'prix' => $visite->getPrix(),
            'nombreMaxVisiteurs' => $visite->getNombreMaxVisiteurs(),
            // Tu peux ajouter ici des détails sur les visiteurs inscrits si nécessaire
            // 'visiteurs' => $visite->getVisiteurs()->map(fn($v) => $v->getNom())->toArray(), // Exemple simple
        ];

        return $this->json($visiteData);
    }

    /**
     * Endpoint pour mettre à jour le statut d'une visite.
     *
     * @param int $id L'ID de la visite à mettre à jour.
     * @param Request $request L'objet Request contenant les données envoyées (le nouveau statut).
     * @return JsonResponse Une réponse JSON indiquant le succès ou l'échec de l'opération.
     */
    #[Route('/api/guide/visites/{id}/statut', name: 'api_guide_visite_update_statut', methods: ['PATCH'])]
    public function updateVisiteStatut(int $id, \Symfony\Component\HttpFoundation\Request $request): JsonResponse
    {
        $visite = $this->visiteRepository->find($id);

        if (!$visite) {
            return $this->json(['message' => 'Visite non trouvée.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $guide = $this->getUser();
        if (!$guide instanceof GuideTouristique || $visite->getGuide() !== $guide) {
            return $this->json(['message' => 'Accès non autorisé à cette visite.'], JsonResponse::HTTP_FORBIDDEN);
        }

        // Récupère le corps de la requête (qui doit être du JSON)
        $data = json_decode($request->getContent(), true);

        // Vérifie si le champ 'statut' est présent dans les données
        if (!isset($data['statut']) || empty($data['statut'])) {
            return $this->json(['message' => 'Le champ "statut" est manquant ou vide.'], JsonResponse::HTTP_BAD_REQUEST); // 400 Bad Request
        }

        $newStatut = $data['statut'];

        // Optionnel : Valider le nouveau statut (par exemple, s'assurer qu'il fait partie d'une liste prédéfinie)
        $validStatuts = ['à venir', 'en cours', 'terminée', 'annulée']; // Adapte selon tes besoins
        if (!in_array($newStatut, $validStatuts)) {
            return $this->json(['message' => 'Statut invalide. Statuts autorisés : ' . implode(', ', $validStatuts)], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Utilise la méthode du repository pour mettre à jour le statut
        $rowsAffected = $this->visiteRepository->updateVisiteStatut($id, $newStatut);

        if ($rowsAffected > 0) {
            // Si la mise à jour a réussi, retourne un message de succès.
            // On pourrait aussi retourner l'entité mise à jour si nécessaire.
            return $this->json(['message' => 'Statut de la visite mis à jour avec succès.', 'statut' => $newStatut]);
        } else {
            // Si la mise à jour n'a rien affecté (ce qui est peu probable ici si la visite existe), retourne une erreur.
            return $this->json(['message' => 'Échec de la mise à jour du statut.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR); // 500 Internal Server Error
        }
    }

    // --- Ajout d'une méthode pour récupérer les visites par statut ---

    /**
     * Endpoint pour récupérer les visites d'un guide, filtrées par statut.
     *
     * Exemple d'appel : /api/guide/visites?statut=à venir
     *
     * @param \Symfony\Component\HttpFoundation\Request $request L'objet Request pour accéder aux paramètres de requête.
     * @return JsonResponse Une réponse JSON contenant la liste des visites filtrées.
     */
    #[Route('/api/guide/visites', name: 'api_guide_visites_filtered', methods: ['GET'])]
    public function getGuideVisitesFiltered( \Symfony\Component\HttpFoundation\Request $request): JsonResponse
    {
        $guide = $this->getUser();
        if (!$guide instanceof GuideTouristique) {
            return $this->json(['message' => 'Authentification requise ou type d\'utilisateur invalide.'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        // Récupère le paramètre 'statut' de la requête GET
        $statut = $request->query->get('statut');

        // Utilise la méthode du repository pour filtrer par statut
        $visites = $this->visiteRepository->findVisitesByGuideAndStatus($guide->getId(), $statut);

        // Formate les données des visites comme dans getGuideVisites
        $visitesData = [];
        foreach ($visites as $visite) {
            $visitesData[] = [
                'id' => $visite->getId(),
                'lieu' => $visite->getLieu(),
                'date' => $visite->getDate() ? $visite->getDate()->format('Y-m-d') : null,
                'heureDebut' => $visite->getHeureDebut() ? $visite->getHeureDebut()->format('H:i:s') : null,
                'heureFin' => $visite->getHeureFin() ? $visite->getHeureFin()->format('H:i:s') : null,
                'duree' => $visite->getDuree(),
                'statut' => $visite->getStatut(),
                'prix' => $visite->getPrix(),
                'nombreMaxVisiteurs' => $visite->getNombreMaxVisiteurs(),
            ];
        }

        return $this->json($visitesData);
    }
}