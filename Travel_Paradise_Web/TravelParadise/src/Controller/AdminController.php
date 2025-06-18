<?php

namespace App\Controller;

use App\Repository\GuideTouristiqueRepository;
use App\Repository\VisiteRepository;
use App\Repository\VisiteurRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_USER')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(
        VisiteRepository $visiteRepo,
        GuideTouristiqueRepository $guideRepo,
        VisiteurRepository $visiteurRepo,
        UserRepository $userRepo
    ): Response {
        // Statistiques générales
        $totalVisites = $visiteRepo->count([]);
        $totalGuides = $guideRepo->count([]);
        $totalVisiteurs = $visiteurRepo->count([]);
        $totalUsers = $userRepo->count([]);

        // Statistiques détaillées
        $guidesActifs = $guideRepo->count(['statut' => true]);
        $visitesAujourdhui = $visiteRepo->getVisitesToday(); // renvoie un int
        $visitesProchainement = $visiteRepo->getVisitesProchaines(7); // renvoie un tableau
        $visitesParMois = $visiteRepo->getVisitesParMois(6);
        $visitesParGuide = $visiteRepo->getVisitesParGuide(10);
        $tauxPresence = $visiteurRepo->getTauxPresence(); // Maintenant cette méthode existe

        return $this->render('admin/dashboard.html.twig', [
            'stats' => [
                'totalVisites' => $totalVisites,
                'totalGuides' => $totalGuides,
                'totalVisiteurs' => $totalVisiteurs,
                'totalUsers' => $totalUsers,
                'guidesActifs' => $guidesActifs,
                'visitesAujourdhui' => $visitesAujourdhui,
                'visitesProchainement' => count($visitesProchainement),
                'tauxPresence' => $tauxPresence
            ],
            'visitesAujourdhui' => [], // car on n'a pas les détails ici
            'visitesProchainement' => $visitesProchainement,
            'visitesParMois' => $visitesParMois,
            'visitesParGuide' => $visitesParGuide,
        ]);
    }

    #[Route('/guides', name: 'admin_guides')]
    #[IsGranted('ROLE_ADMIN')]
    public function guides(): Response
    {
        return $this->render('admin/guides.html.twig');
    }

    #[Route('/visites', name: 'admin_visites')]
    public function visites(): Response
    {
        return $this->render('admin/visites.html.twig');
    }

    #[Route('/users', name: 'users')] // Nouvelle route pour la gestion des utilisateurs
    #[IsGranted('ROLE_ADMIN')] // Exige le rôle ADMIN pour accéder à cette page
    public function users(UserRepository $userRepository): Response // Injecte le UserRepository
    {
        // Récupère tous les utilisateurs depuis la base de données
        $users = $userRepository->findAll();

        return $this->render('admin/users.html.twig', [ // Rend un nouveau template
            'users' => $users, // Passe la liste des utilisateurs au template
        ]);
    }
}
