<?php

namespace App\Controller;

use App\Repository\VisiteRepository;
use App\Repository\GuideTouristiqueRepository;
use App\Repository\VisiteurRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack; // On a besoin de RequestStack pour la session
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin', name: 'admin_')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    private $requestStack; // Déclare la propriété requestStack

    // Injection des repositories et de RequestStack via le constructeur
    public function __construct(
        RequestStack $requestStack, // Injecte RequestStack ici
        private VisiteRepository $visiteRepo,
        private GuideTouristiqueRepository $guideRepo,
        private VisiteurRepository $visiteurRepo,
        private UserRepository $userRepo
    ) {
        $this->requestStack = $requestStack; // Assigne RequestStack à la propriété
    }

    #[Route('/', name: 'dashboard')]
    public function dashboard(): Response
    {
        // Statistiques de base
        $totalVisites = $this->visiteRepo->count([]);
        $totalGuides = $this->guideRepo->count([]);
        $totalVisiteurs = $this->visiteurRepo->count([]);
        $totalUsers = $this->userRepo->count([]);

        // Statistiques détaillées (assure-toi que ces méthodes existent dans tes repositories)
        $guidesActifs = $this->guideRepo->count(['statut' => true]); // Assure-toi que la propriété 'statut' existe dans GuideTouristique
        $visitesAujourdhui = $this->visiteRepo->getVisitesToday(); // Assure-toi que cette méthode existe
        $visitesProchainement = $this->visiteRepo->getVisitesProchaines(7); // Assure-toi que cette méthode existe
        $tauxPresence = $this->visiteurRepo->getTauxPresence(); // Assure-toi que cette méthode existe

        // --- Logique pour la modale de bienvenue ---
        $session = $this->requestStack->getSession();
        $user = $this->getUser(); // Récupère l'utilisateur connecté (méthode de AbstractController)

        $showWelcomeModal = false;
        // On vérifie si l'utilisateur est connecté ET si la modale n'a PAS été affichée dans cette session pour le dashboard
        // On utilise une clé de session spécifique pour le dashboard admin
        if ($user && !$session->get('welcome_modal_shown_admin_dashboard')) {
             $showWelcomeModal = true;
             // On marque la modale comme affichée pour le dashboard dans la session
             $session->set('welcome_modal_shown_admin_dashboard', true);
        }

        // Récupère le nom de l'utilisateur pour l'afficher dans la modale
        // !!! ASSURE-TOI QUE TON ENTITÉ USER A UNE MÉTHODE getNom() !!!
        // Si ta méthode est getUsername(), getFullName(), etc., remplace getNom() ci-dessous.
        $userName = $user ? $user->getNom() : 'Administrateur';


        // --- Rendu du template ---
        return $this->render('admin/dashboard.html.twig', [
            'stats' => [
                'totalVisites' => $totalVisites,
                'totalGuides' => $totalGuides,
                'totalVisiteurs' => $totalVisiteurs,
                'totalUsers' => $totalUsers,
                'guidesActifs' => $guidesActifs,
                'visitesAujourdhui' => count($visitesAujourdhui), // On passe le nombre
                'visitesProchainement' => count($visitesProchainement), // On passe le nombre
                'tauxPresence' => $tauxPresence
            ],
            // On passe les listes complètes si tu veux les afficher dans le template
            'visitesAujourdhuiList' => $visitesAujourdhui,
            'visitesProchainementList' => $visitesProchainement,
            // --- Variables pour la modale ---
            'showWelcomeModal' => $showWelcomeModal, // Dit au template s'il faut afficher la modale
            'userName' => $userName, // Passe le nom de l'utilisateur pour le message
        ]);
    }

    #[Route('/guides', name: 'guides')]
    public function guides(): Response
    {
        // Cette route devrait probablement lister les guides
        // Utilise la propriété injectée dans le constructeur
        $guides = $this->guideRepo->findAll(); // Ou utilise la pagination si tu l'as mise en place

        return $this->render('admin/guides.html.twig', [ // Adapte le chemin du template si nécessaire
            'guides' => $guides,
        ]);
    }

    #[Route('/visites', name: 'visites')]
    public function visites(): Response
    {
        // Cette route devrait probablement lister les visites
        // Utilise la propriété injectée dans le constructeur
        $visites = $this->visiteRepo->findAll(); // Ou utilise la pagination

        return $this->render('admin/visites.html.twig', [ // Adapte le chemin du template si nécessaire
            'visites' => $visites,
        ]);
    }

    #[Route('/users', name: 'users')]
    public function users(): Response
    {
        // Utilise la propriété injectée dans le constructeur
        $users = $this->userRepo->findAll(); // Ou utilise la pagination

        return $this->render('admin/users.html.twig', [ // Adapte le chemin du template si nécessaire
            'users' => $users,
        ]);
    }

    #[Route('/statistics', name: 'statistics')]
    public function statistics(): Response
    {
        // Statistiques avancées pour une page dédiée (assure-toi que ces méthodes existent)
        // Utilise les propriétés injectées dans le constructeur
        $visitsPerMonth = $this->visiteRepo->countVisitsPerMonth();
        $visitsByCountry = $this->visiteRepo->countVisitsByCountry();
        $visitsByGuide = $this->visiteRepo->getVisitesParGuide();
        $monthlyTrends = $this->visiteRepo->getMonthlyTrends();

        return $this->render('admin/statistics.html.twig', [ // Adapte le chemin du template si nécessaire
            'visitsPerMonth' => $visitsPerMonth,
            'visitsByCountry' => $visitsByCountry,
            'visitsByGuide' => $visitsByGuide,
            'monthlyTrends' => $monthlyTrends,
        ]);
    }
}
