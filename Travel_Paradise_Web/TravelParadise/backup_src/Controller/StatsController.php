<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\VisiteRepository;
use App\Repository\VisiteurRepository;

class StatsController extends AbstractController
{
    #[Route('/admin/stats', name: 'app_stats')]
    public function index(VisiteRepository $visiteRepo, VisiteurRepository $visiteurRepo): Response
    {
        return $this->render('stats/index.html.twig', [
            'visites_par_mois' => $visiteRepo->getVisitesParMois(),
            'visites_par_guide' => $visiteRepo->getVisitesParMoisEtParGuide(),
            'taux_presence' => $visiteurRepo->getTauxPresenceParMois(),
        ]);
    }
}
