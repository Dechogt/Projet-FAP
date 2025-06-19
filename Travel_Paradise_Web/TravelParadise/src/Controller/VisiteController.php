<?php

namespace App\Controller;

use App\Entity\Visite;
use App\Form\VisiteType;
use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface; // Importe SluggerInterface
use Symfony\Component\HttpFoundation\File\UploadedFile; // Importe UploadedFile
use Symfony\Component\Filesystem\Filesystem; // Pour supprimer l'ancien fichier
use Symfony\Component\HttpFoundation\File\Exception\FileException; // Pour gérer les exceptions d'upload

#[Route('/admin/visite')] // Assure-toi que la route est correcte
// #[IsGranted('ROLE_ADMIN')] // Optionnel : sécuriser tout le contrôleur
class VisiteController extends AbstractController
{
    // Injecte SluggerInterface et Filesystem
    public function __construct(
        private VisiteRepository $visiteRepository,
        private SluggerInterface $slugger,
        private Filesystem $filesystem
    ) {
    }

    #[Route(name: 'app_visite_index', methods: ['GET'])]
    public function index(VisiteRepository $visiteRepository): Response
    {
        return $this->render('visite/index.html.twig', [
            'visites' => $visiteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_visite_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $visite = new Visite();
        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Utilise un répertoire différent si tu veux
                        $newFilename
                    );
                } catch (FileException $e) {
                     $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de l\'image.');
                     return $this->redirectToRoute('app_visite_new');
                }

                $visite->setImageFilename($newFilename);
            }

            $this->visiteRepository->save($visite, true);

            $this->addFlash('success', 'La visite a été créée avec succès.');

            return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visite/new.html.twig', [
            'visite' => $visite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_visite_show', methods: ['GET'])]
    public function show(Visite $visite): Response
    {
        return $this->render('visite/show.html.twig', [
            'visite' => $visite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_visite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Visite $visite): Response
    {
        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             /** @var UploadedFile|null $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Utilise le même répertoire
                        $newFilename
                    );

                    // Supprime l'ancien fichier si il existe
                    $oldImageFilename = $visite->getImageFilename();
                    if ($oldImageFilename) {
                         $oldImagePath = $this->getParameter('images_directory') . '/' . $oldImageFilename;
                         if ($this->filesystem->exists($oldImagePath)) {
                             $this->filesystem->remove($oldImagePath);
                         }
                    }

                } catch (FileException $e) {
                     $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de l\'image.');
                     return $this->redirectToRoute('app_visite_edit', ['id' => $visite->getId()]);
                }

                $visite->setImageFilename($newFilename);
            }

            $this->visiteRepository->save($visite, true);

            $this->addFlash('success', 'La visite a été mise à jour avec succès.');

            return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visite/edit.html.twig', [
            'visite' => $visite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_visite_delete', methods: ['POST'])]
    public function delete(Request $request, Visite $visite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$visite->getId(), $request->request->get('_token'))) {

             // Supprime le fichier image associé si il existe
            $imageFilename = $visite->getImageFilename();
            if ($imageFilename) {
                 $imagePath = $this->getParameter('images_directory') . '/' . $imageFilename;
                 if ($this->filesystem->exists($imagePath)) {
                     $this->filesystem->remove($imagePath);
                 }
            }

            $this->visiteRepository->remove($visite, true);

            $this->addFlash('success', 'La visite a été supprimée avec succès.');
        } else {
             $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
    }
}
