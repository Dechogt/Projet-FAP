<?php
// src/Controller/GuideTouristiqueController.php

namespace App\Controller;

use App\Entity\GuideTouristique; // Importe l'entité
use App\Form\GuideTouristiqueType; // Importe le formulaire
use App\Repository\GuideTouristiqueRepository; // Importe le repository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface; // Pour l'upload d'image
use Symfony\Component\HttpFoundation\File\UploadedFile; // Pour l'upload d'image
use Symfony\Component\Filesystem\Filesystem; // Pour supprimer l'ancien fichier (si tu gères les images)
use Knp\Component\Pager\PaginatorInterface; // Pour la pagination (si nécessaire)

#[Route('/admin/guide_touristique')] // Préfixe de route pour ce contrôleur
// #[IsGranted('ROLE_ADMIN')] // Optionnel : sécuriser tout le contrôleur pour les ADMINs
class GuideTouristiqueController extends AbstractController
{
    // Injecte les dépendances nécessaires (Repository, Slugger, Filesystem)
    public function __construct(
        private GuideTouristiqueRepository $guideTouristiqueRepository,
        private SluggerInterface $slugger, // Si tu gères les images
        private Filesystem $filesystem // Si tu gères la suppression d'anciennes images
    ) {
    }

    // Action pour afficher la liste (Index)
    #[Route('/', name: 'app_guide_touristique_index', methods: ['GET'])]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
         // Récupère le terme de recherche depuis la requête (paramètre 'q')
        $searchTerm = $request->query->get('q');

        // Crée une requête DQL ou QueryBuilder pour récupérer les guides
        $queryBuilder = $this->guideTouristiqueRepository->createQueryBuilder('g')
            ->orderBy('g.id', 'ASC'); // Tri par défaut

        // Ajoute la condition de recherche si un terme est présent
        if ($searchTerm) {
            $queryBuilder->andWhere('g.nom LIKE :searchTerm OR g.prenom LIKE :searchTerm OR g.email LIKE :searchTerm') // Adapte les champs de recherche
                         ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }

        // Paginer les résultats de la requête
        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(), // Utilise la requête construite
            $request->query->getInt('page', 1),
            10
        );

        // Rend le template index.html.twig en lui passant l'objet de pagination et le terme de recherche
        return $this->render('guide_touristique/index.html.twig', [
            'pagination' => $pagination,
            'searchTerm' => $searchTerm, // Passe le terme de recherche au template pour l'afficher dans le champ
        ]);
        // Récupère tous les guides (ou une requête DQL/QueryBuilder)
        $query = $this->guideTouristiqueRepository->createQueryBuilder('g')
            ->orderBy('g.id', 'ASC') // Ajoute un tri par défaut
            ->getQuery();

        // Paginer les résultats de la requête
        $pagination = $paginator->paginate(
            $query, // La requête à paginer
            $request->query->getInt('page', 1), // Numéro de page, 1 par défaut
            10 // Nombre d'éléments par page (peut être configuré globalement)
        );

        // Rend le template index.html.twig en lui passant l'objet de pagination
        return $this->render('guide_touristique/index.html.twig', [
            'pagination' => $pagination, // Passe l'objet de pagination au template
        ]);
    }


    // Action pour créer un nouveau guide (New)
    #[Route('/new', name: 'app_guide_touristique_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $guideTouristique = new GuideTouristique(); // Crée une nouvelle instance de l'entité
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique); // Crée le formulaire
        $form->handleRequest($request); // Gère la requête (soumission du formulaire)

        if ($form->isSubmitted() && $form->isValid()) {
            // Logique d'upload d'image si tu en as une (comme vu précédemment)
            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                try {
                    $photoFile->move($this->getParameter('photos_directory'), $newFilename);
                    $guideTouristique->setPhotoFilename($newFilename);
                } catch (FileException $e) {
                    // Gérer l'erreur d'upload
                }
            }

            // Sauvegarde le nouveau guide en base de données
            $this->guideTouristiqueRepository->save($guideTouristique, true);

            // Ajoute un message flash (optionnel mais recommandé)
            $this->addFlash('success', 'Le guide a été créé avec succès.');

            // Redirige vers la page d'index
            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        // Rend le template new.html.twig en lui passant le formulaire
        return $this->renderForm('guide_touristique/new.html.twig', [
            'guide_touristique' => $guideTouristique, // Passe l'entité (utile pour les erreurs de validation)
            'form' => $form, // Passe l'objet formulaire au template
        ]);
    }

    // Action pour afficher les détails d'un guide (Show)
    #[Route('/{id}', name: 'app_guide_touristique_show', methods: ['GET'])]
    public function show(GuideTouristique $guideTouristique): Response // Symfony résout automatiquement l'entité par l'ID dans l'URL
    {
        // Rend le template show.html.twig en lui passant l'entité guideTouristique
        return $this->render('guide_touristique/show.html.twig', [
            'guide_touristique' => $guideTouristique, // Passe la variable 'guide_touristique' au template
        ]);
    }

    // Action pour modifier un guide existant (Edit)
    #[Route('/{id}/edit', name: 'app_guide_touristique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GuideTouristique $guideTouristique): Response // Symfony résout automatiquement l'entité par l'ID
    {
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique); // Crée le formulaire avec l'entité existante
        $form->handleRequest($request); // Gère la requête

        if ($form->isSubmitted() && $form->isValid()) {
             // Logique d'upload d'image si tu en as une (avec suppression de l'ancien fichier)
            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                try {
                    $photoFile->move($this->getParameter('photos_directory'), $newFilename);

                    // Supprime l'ancien fichier si il existe
                    $oldPhotoFilename = $guideTouristique->getPhotoFilename();
                    if ($oldPhotoFilename) {
                         $oldPhotoPath = $this->getParameter('photos_directory') . '/' . $oldPhotoFilename;
                         if ($this->filesystem->exists($oldPhotoPath)) {
                             $this->filesystem->remove($oldPhotoPath);
                         }
                    }

                    $guideTouristique->setPhotoFilename($newFilename);
                } catch (FileException $e) {
                    // Gérer l'erreur d'upload
                }
            }
            // Si aucun nouveau fichier n'est uploadé, le photoFilename existant est conservé

            // Sauvegarde les modifications en base de données
            $this->guideTouristiqueRepository->save($guideTouristique, true);

            // Ajoute un message flash
            $this->addFlash('success', 'Le guide a été mis à jour avec succès.');

            // Redirige vers la page d'index
            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        // Rend le template edit.html.twig en lui passant le formulaire et l'entité
        return $this->renderForm('guide_touristique/edit.html.twig', [
            'guide_touristique' => $guideTouristique, // Passe la variable 'guide_touristique' au template
            'form' => $form, // Passe l'objet formulaire au template
        ]);
    }

    // Action pour supprimer un guide (Delete)
    #[Route('/{id}', name: 'app_guide_touristique_delete', methods: ['POST'])]
    public function delete(Request $request, GuideTouristique $guideTouristique): Response // Symfony résout automatiquement l'entité par l'ID
    {
        // Vérifie le token CSRF pour la sécurité
        if ($this->isCsrfTokenValid('delete'.$guideTouristique->getId(), $request->request->get('_token'))) {

             // Supprime le fichier photo associé si il existe
            $photoFilename = $guideTouristique->getPhotoFilename();
            if ($photoFilename) {
                 $photoPath = $this->getParameter('photos_directory') . '/' . $photoFilename;
                 if ($this->filesystem->exists($photoPath)) {
                     $this->filesystem->remove($photoPath);
                 }
            }

            // Supprime l'entité de la base de données
            $this->guideTouristiqueRepository->remove($guideTouristique, true);

            // Ajoute un message flash
            $this->addFlash('success', 'Le guide a été supprimé avec succès.');
        } else {
             $this->addFlash('error', 'Token CSRF invalide.');
        }
        // Redirige vers la page d'index
        return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
    }
}
