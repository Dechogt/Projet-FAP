<?php

namespace App\Controller;

use App\Entity\Visite;
use App\Form\VisiteType;
use App\Repository\VisiteRepository;
use App\Service\FileUploader; // Assure-toi que ce service existe et est configuré
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
// #[IsGranted('ROLE_ADMIN')] // Optionnel : sécuriser tout le contrôleur

#[Route('/admin/visite')]
class VisiteController extends AbstractController
{
    // Injection des dépendances via le constructeur
    public function __construct(
        private VisiteRepository $visiteRepository,
        private EntityManagerInterface $entityManager, // Injecte EntityManagerInterface
        private FileUploader $fileUploader, // Utilise ton service FileUploader
        private Filesystem $filesystem,
        private SluggerInterface $slugger // Injecte SluggerInterface
    ) {
    }

    #[Route('/', name: 'app_visite_index', methods: ['GET'])]
    public function index(): Response // Pas besoin d'injecter VisiteRepository ici si tu l'as dans le constructeur
    {
        return $this->render('visite/index.html.twig', [
            'visites' => $this->visiteRepository->findAll(), // Utilise la propriété injectée
        ]);
    }

    #[Route('/new', name: 'app_visite_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $visite = new Visite();
        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $photoFile */ // Utilise photoFile pour la cohérence
            $photoFile = $form->get('photoFile')->getData(); // Utilise photoFile

            if ($photoFile) {
                // Utilise ton service FileUploader pour gérer l'upload
                try {
                    $photoFilename = $this->fileUploader->upload($photoFile);
                    $visite->setPhotoFilename($photoFilename); // Utilise setPhotoFilename
                } catch (FileException $e) {
                     $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de l\'image : ' . $e->getMessage());
                     // Redirige vers la page new pour afficher les erreurs du formulaire
                     return $this->render('visite/new.html.twig', [
                        'visite' => $visite,
                        'form' => $form,
                    ]);
                }
            }

            $this->entityManager->persist($visite); // Utilise EntityManager
            $this->entityManager->flush(); // Utilise EntityManager

            $this->addFlash('success', 'La visite a été créée avec succès.');

            return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
        }

        // Utilise render() au lieu de renderForm()
        return $this->render('visite/new.html.twig', [
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
             /** @var UploadedFile|null $photoFile */ // Utilise photoFile
            $photoFile = $form->get('photoFile')->getData(); // Utilise photoFile

            if ($photoFile) {
                // Supprimer l'ancienne photo si elle existe
                $oldPhotoFilename = $visite->getPhotoFilename(); // Utilise getPhotoFilename
                if ($oldPhotoFilename) {
                     $oldPhotoPath = $this->getParameter('uploads_directory') . '/' . $oldPhotoFilename; // Utilise uploads_directory
                     if ($this->filesystem->exists($oldPhotoPath)) {
                         $this->filesystem->remove($oldPhotoPath);
                     }
                }

                // Uploader la nouvelle photo en utilisant ton service
                try {
                    $photoFilename = $this->fileUploader->upload($photoFile);
                    $visite->setPhotoFilename($photoFilename); // Utilise setPhotoFilename
                } catch (FileException $e) {
                     $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de l\'image : ' . $e->getMessage());
                     // Redirige vers la page edit pour afficher les erreurs du formulaire
                     return $this->render('visite/edit.html.twig', [
                        'visite' => $visite,
                        'form' => $form,
                    ]);
                }
            }
            // Si aucun nouveau fichier n'est uploadé, la photo existante est conservée

            $this->entityManager->flush(); // Utilise EntityManager

            $this->addFlash('success', 'La visite a été mise à jour avec succès.');

            return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
        }

        // Utilise render() au lieu de renderForm()
        return $this->render('visite/edit.html.twig', [
            'visite' => $visite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_visite_delete', methods: ['POST'])]
    public function delete(Request $request, Visite $visite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$visite->getId(), $request->request->get('_token'))) {

             // Supprime le fichier image associé si il existe
            $photoFilename = $visite->getPhotoFilename(); // Utilise getPhotoFilename
            if ($photoFilename) {
                 $photoPath = $this->getParameter('uploads_directory') . '/' . $photoFilename; // Utilise uploads_directory
                 if ($this->filesystem->exists($photoPath)) {
                     $this->filesystem->remove($photoPath);
                 }
            }

            $this->entityManager->remove($visite); // Utilise EntityManager
            $this->entityManager->flush(); // Utilise EntityManager

            $this->addFlash('success', 'La visite a été supprimée avec succès.');
        } else {
             $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_visite_index', [], Response::HTTP_SEE_OTHER);
    }
}
