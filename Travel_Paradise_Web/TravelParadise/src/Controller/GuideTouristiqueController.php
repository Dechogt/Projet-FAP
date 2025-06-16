<?php

namespace App\Controller;

use App\Entity\GuideTouristique;
use App\Form\GuideTouristiqueForm;
use App\Repository\GuideTouristiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/guide/touristique')]
final class GuideTouristiqueController extends AbstractController
{
    #[Route(name: 'app_guide_touristique_index', methods: ['GET'])]
    public function index(GuideTouristiqueRepository $guideTouristiqueRepository): Response
    {
        return $this->render('guide_touristique/index.html.twig', [
            'guide_touristiques' => $guideTouristiqueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_guide_touristique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $guideTouristique = new GuideTouristique();
        $form = $this->createForm(GuideTouristiqueForm::class, $guideTouristique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($guideTouristique);
            $entityManager->flush();

            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_touristique/new.html.twig', [
            'guide_touristique' => $guideTouristique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_touristique_show', methods: ['GET'])]
    public function show(GuideTouristique $guideTouristique): Response
    {
        return $this->render('guide_touristique/show.html.twig', [
            'guide_touristique' => $guideTouristique,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_guide_touristique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GuideTouristique $guideTouristique, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GuideTouristiqueForm::class, $guideTouristique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_touristique/edit.html.twig', [
            'guide_touristique' => $guideTouristique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_touristique_delete', methods: ['POST'])]
    public function delete(Request $request, GuideTouristique $guideTouristique, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guideTouristique->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($guideTouristique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
    }
}
