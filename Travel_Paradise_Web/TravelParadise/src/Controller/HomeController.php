<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        if ($this->getUser()) {
            // Assure-toi que la route 'admin_dashboard' existe et est correcte
            return $this->redirectToRoute('admin_dashboard');
        }

        // Sinon, rediriger vers la page de connexion
        return $this->redirectToRoute('app_login');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
