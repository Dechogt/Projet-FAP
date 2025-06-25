<?php

namespace App\Controller;

use App\Entity\GuideTouristique;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class ApiAuthController extends AbstractController
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private EntityManagerInterface $entityManager,
        private JWTTokenManagerInterface $jwtManager
    ) {}

    /**
     * Endpoint pour l'authentification des guides via API.
     *
     * Accepte les identifiants (email, password) en JSON dans le corps de la requête POST.
     * Retourne un token JWT en cas de succès, ou une erreur en cas d'échec.
     *
     * @param Request $request L'objet Request contenant les données envoyées.
     * @return JsonResponse Une réponse JSON avec le token ou un message d'erreur.
     */
    // --- MODIFICATION ICI : La route est maintenant '/api/login_check' ---
    #[Route('/api/login_check', name: 'api_login', methods: ['POST', 'OPTIONS'])]
    public function apiLogin(Request $request): JsonResponse
    {
        // Si la requête est OPTIONS, on renvoie juste une réponse vide avec les bons headers CORS
        // C'est la requête "preflight" du navigateur.
        if ($request->isMethod('OPTIONS')) {
            $response = new JsonResponse();
            // Ajoute les mêmes headers CORS que pour la réponse POST
            // Assure-toi que l'origine correspond à ton application mobile si tu n'utilises pas '*'
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'POST, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
            return $response;
        }

        // --- Le reste de ton code pour la connexion POST reste inchangé ---
        $data = json_decode($request->getContent(), true);

        if (!isset($data['email']) || !isset($data['password']) || empty($data['email']) || empty($data['password'])) {
            return $this->json(['message' => 'Les champs "email" et "password" sont requis.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $email = $data['email'];
        $password = $data['password'];

        $guide = $this->entityManager->getRepository(GuideTouristique::class)->findOneBy(['email' => $email]);

        if (!$guide || !$this->passwordHasher->isPasswordValid($guide, $password)) {
            return $this->json(['message' => 'Identifiants invalides.'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $token = $this->jwtManager->create($guide);

        $response = $this->json([
            'message' => 'Authentification réussie.',
            'token' => $token,
            'guideId' => $guide->getId()
        ]);

        // Ajoute les en-têtes CORS pour la réponse POST
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }

    // Assure-toi que la route pour les visites correspond aussi si tu l'utilises
    /**
     * @Route("/api/guide/visites", name="api_guide_visites", methods: ["GET", "OPTIONS"])
     */
    public function getVisites(Request $request): JsonResponse
    {
        if ($request->isMethod('OPTIONS')) {
            $response = new JsonResponse();
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
            return $response;
        }

        $user = $this->getUser();

        if (!$user) {
            return $this->json(['message' => 'Unauthorized'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $visites = [
            ['id' => 1, 'nom' => 'Visite du Jardin des Plantes', 'statut' => 'Planifiée'],
            ['id' => 2, 'nom' => 'Visite du Musée d\'Orsay', 'statut' => 'Terminée'],
        ];

        $response = $this->json($visites);

        // Ajoute les en-têtes CORS pour la réponse GET
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }
}