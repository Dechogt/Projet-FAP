<?php

namespace App\Controller;

use App\Entity\GuideTouristique;
use App\Entity\Visite; // Assure-toi que Visite est importé
use App\Repository\VisiteRepository;
use App\Repository\VisiteurRepository;
use Doctrine\ORM\EntityManagerInterface; // Importe l'interface EntityManagerInterface
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Contrôleur pour gérer les API liées aux visites, spécifiquement pour les guides.
 */
class ApiVisiteController extends AbstractController
{
    // Injection des repositories nécessaires ET de l'EntityManager
    public function __construct(
        private VisiteRepository $visiteRepository,
        private VisiteurRepository $visiteurRepository,
        private EntityManagerInterface $entityManager // <-- EntityManager injecté ici
    ) {}

    /**
     * Endpoint pour récupérer une visite spécifique par son ID, incluant ses visiteurs.
     *
     * @param int $id L'ID de la visite à récupérer.
     * @param Request $request L'objet Request pour gérer les requêtes OPTIONS (CORS).
     * @return JsonResponse Une réponse JSON contenant les détails de la visite et ses visiteurs, ou une erreur.
     */
    #[Route('/api/guide/visites/{id}', name: 'api_guide_visite_show', methods: ['GET', 'OPTIONS'])]
    public function getVisiteById(int $id, Request $request): JsonResponse
    {
        // --- Gérer la requête OPTIONS pour le CORS ---
        if ($request->isMethod('OPTIONS')) {
            $response = new JsonResponse();
            // Assure-toi que l'origine est correcte ou utilise '*' si nécessaire pour le développement
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
            return $response;
        }
        // --- Fin de la gestion CORS ---

        $visite = $this->visiteRepository->find($id);

        if (!$visite) {
            return $this->json(['message' => 'Visite non trouvée.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $guide = $this->getUser();
        // Vérifie si l'utilisateur est un GuideTouristique et si la visite appartient bien à ce guide
        if (!$guide instanceof GuideTouristique || $visite->getGuide() !== $guide) {
            return $this->json(['message' => 'Accès non autorisé à cette visite.'], JsonResponse::HTTP_FORBIDDEN);
        }

        // --- Récupérer les visiteurs associés à cette visite ---
        // Utilise la méthode getVisiteurs() de l'entité Visite (qui vient de la relation OneToMany)
        $visiteurs = $visite->getVisiteurs();

        // Formater les données des visiteurs pour qu'elles correspondent à ce que l'app Expo attend
        $visiteursData = [];
        foreach ($visiteurs as $visiteur) {
            $visiteursData[] = [
                'id' => $visiteur->getId(),
                'nom' => $visiteur->getNom(),
                'prenom' => $visiteur->getPrenom(),
                // Utilise les champs 'present' et 'commentaire' de ton entité Visiteur
                'present' => $visiteur->isPresent(),
                'commentaire' => $visiteur->getCommentaire(),
            ];
        }
        // --- Fin de la récupération des visiteurs ---

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
            // --- Ajoute la liste des visiteurs ici ---
            'inscrits' => $visiteursData, // C'est la clé que ton app Expo attend !
        ];

        // Crée la réponse JSON et ajoute les headers CORS
        $response = $this->json($visiteData);
        $response->headers->set('Access-Control-Allow-Origin', '*'); // Ou l'origine de ton app Expo
        $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }

    /**
     * Endpoint pour mettre à jour les présences et commentaires des visiteurs pour une visite donnée.
     *
     * @param Visite $visite L'entité Visite récupérée via le paramètre {id} de la route.
     * @param Request $request L'objet Request contenant les données envoyées par l'application Expo.
     * @return JsonResponse Une réponse JSON indiquant le succès ou l'échec de l'opération.
     */
    #[Route('/api/guide/visites/{id}/checkin', name: 'api_visite_checkin', methods: ['POST', 'OPTIONS'])]
    public function updateVisiteCheckin(Visite $visite, Request $request): JsonResponse
    {
        // Gérer la requête OPTIONS pour le CORS (preflight request)
        if ($request->isMethod('OPTIONS')) {
            $response = new JsonResponse();
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'POST, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
            return $response;
        }

        // Sécuriser la route : vérifier que l'utilisateur est authentifié et est le bon guide
        $guide = $this->getUser();
        if (!$guide instanceof GuideTouristique || $visite->getGuide() !== $guide) {
            return $this->json(['message' => 'Accès non autorisé à cette visite.'], JsonResponse::HTTP_FORBIDDEN);
        }

        // Récupérer les données envoyées par l'application Expo (format JSON)
        $data = json_decode($request->getContent(), true);

        // Valider les données reçues : s'assurer que 'inscrits' est présent et est un tableau
        if (!isset($data['inscrits']) || !is_array($data['inscrits'])) {
            return $this->json(['message' => 'Données des inscrits manquantes ou invalides.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Créer une map des visiteurs de la visite pour un accès rapide par ID
        $visiteursDeLaVisite = $visite->getVisiteurs();
        $visiteursMap = [];
        foreach ($visiteursDeLaVisite as $visiteur) {
            $visiteursMap[$visiteur->getId()] = $visiteur;
        }

        // Parcourir les données des inscrits envoyées par l'application
        foreach ($data['inscrits'] as $inscritData) {
            $visiteurId = $inscritData['id'];
            // Vérifier si le visiteur existe bien pour cette visite
            if (isset($visiteursMap[$visiteurId])) {
                $visiteur = $visiteursMap[$visiteurId];

                // Mettre à jour le champ 'present' si présent dans les données reçues
                if (isset($inscritData['present'])) {
                    $visiteur->setPresent((bool) $inscritData['present']);
                }

                // Mettre à jour le champ 'commentaire' si présent dans les données reçues
                if (isset($inscritData['commentaire'])) {
                    $visiteur->setCommentaire($inscritData['commentaire']);
                }
            }
        }

        // Mettre à jour le commentaire général de la visite si le champ existe dans l'entité Visite
        // et s'il est présent dans les données reçues.
        if (isset($data['commentaireGeneral']) && method_exists($visite, 'setCommentaireGeneral')) {
             $visite->setCommentaireGeneral($data['commentaireGeneral']);
        }

        // Mettre à jour le statut de la visite si le champ existe dans l'entité Visite
        // et s'il est présent dans les données reçues.
        if (isset($data['statut']) && method_exists($visite, 'setStatut')) {
             $visite->setStatut($data['statut']);
        }

        // Persister toutes les modifications dans la base de données
        $this->entityManager->flush();

        // Renvoyer une réponse de succès
        $response = $this->json(['message' => 'Mise à jour de la visite réussie.']);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }

    // --- Les autres méthodes (getGuideVisites, updateVisiteStatut, etc.) restent inchangées ---
    // Si tu as d'autres méthodes dans ce contrôleur, assure-toi qu'elles sont bien présentes.
    // Par exemple, si tu as getGuideVisites, il devrait ressembler à ceci :

    /**
     * Endpoint pour récupérer les visites d'un guide authentifié.
     *
     * @return JsonResponse Une réponse JSON contenant la liste des visites ou un message d'erreur.
     */
    #[Route('/api/guide/visites', name: 'api_guide_visites', methods: ['GET'])]
    public function getGuideVisites(): JsonResponse
    {
        $guide = $this->getUser();

        if (!$guide instanceof GuideTouristique) {
            return $this->json(['message' => 'Authentification requise ou type d\'utilisateur invalide.'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        // Récupère toutes les visites associées à ce guide.
        $visites = $this->visiteRepository->findBy(['guide' => $guide], ['date' => 'ASC', 'heureDebut' => 'ASC']);

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

    // Si tu as aussi la route pour mettre à jour le statut :
    /**
     * Endpoint pour mettre à jour le statut d'une visite.
     *
     * @param int $id L'ID de la visite à mettre à jour.
     * @param Request $request L'objet Request contenant les données envoyées (le nouveau statut).
     * @return JsonResponse Une réponse JSON indiquant le succès ou l'échec de l'opération.
     */
    #[Route('/api/guide/visites/{id}/statut', name: 'api_guide_visite_update_statut', methods: ['PATCH'])]
    public function updateVisiteStatut(int $id, Request $request): JsonResponse
    {
        $visite = $this->visiteRepository->find($id);

        if (!$visite) {
            return $this->json(['message' => 'Visite non trouvée.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $guide = $this->getUser();
        if (!$guide instanceof GuideTouristique || $visite->getGuide() !== $guide) {
            return $this->json(['message' => 'Accès non autorisé à cette visite.'], JsonResponse::HTTP_FORBIDDEN);
        }

        $data = json_decode($request->getContent(), true);

        if (!isset($data['statut']) || empty($data['statut'])) {
            return $this->json(['message' => 'Le champ "statut" est manquant ou vide.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $newStatut = $data['statut'];
        $validStatuts = ['à venir', 'en cours', 'terminée', 'annulée']; // Adapte selon tes besoins

        if (!in_array($newStatut, $validStatuts)) {
            return $this->json(['message' => 'Statut invalide. Statuts autorisés : ' . implode(', ', $validStatuts)], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Utilise la méthode du repository pour mettre à jour le statut
        // Assure-toi que VisiteRepository a une méthode updateVisiteStatut($id, $newStatut)
        // Si ce n'est pas le cas, tu peux faire la mise à jour directement ici :
        $visite->setStatut($newStatut);
        $this->entityManager->flush(); // Utilise l'EntityManager injecté

        return $this->json(['message' => 'Statut de la visite mis à jour avec succès.', 'statut' => $newStatut]);
    }
}