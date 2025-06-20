<?php

namespace App\Controller;

use App\Entity\GuideTouristique;
use App\Form\GuideTouristiqueType;
use App\Repository\GuideTouristiqueRepository;
use App\Service\FileUploader; // Assure-toi que ce service existe et est configuré
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile; // Importe UploadedFile
use Symfony\Component\Filesystem\Filesystem; // Importe Filesystem pour supprimer les fichiers
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/guide_touristique')]
class GuideTouristiqueController extends AbstractController
{
    #[Route('/', name: 'app_guide_touristique_index', methods: ['GET'])]
    public function index(
        Request $request,
        GuideTouristiqueRepository $guideTouristiqueRepository,
        PaginatorInterface $paginator // Injecte le service Paginator
    ): Response
    {
        $searchTerm = $request->query->get('q', '');

        // Récupère la requête (QueryBuilder ou Query) pour la pagination
        // Si tu as une méthode search qui retourne un QueryBuilder ou Query :
        if ($searchTerm) {
            $query = $guideTouristiqueRepository->searchQuery($searchTerm); // Supposons une méthode searchQuery
        } else {
            // Sinon, crée un QueryBuilder pour récupérer tous les guides
            $query = $guideTouristiqueRepository->createQueryBuilder('g');
        }

        // Utilise le Paginator pour paginer les résultats
        $pagination = $paginator->paginate(
            $query, // La requête à paginer
            $request->query->getInt('page', 1), // Numéro de page (par défaut 1)
            10 // Nombre d'éléments par page (adapte selon tes besoins)
        );

        return $this->render('guide_touristique/index.html.twig', [
            // Passe l'objet de pagination au template sous le nom 'pagination'
            'pagination' => $pagination,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'app_guide_touristique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, FileUploader $fileUploader): Response
    {
        $guideTouristique = new GuideTouristique();
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();

            if ($photoFile) {
                $photoFilename = $fileUploader->upload($photoFile);
                $guideTouristique->setPhotoFilename($photoFilename);
            }

            // Le statut est défini à true par défaut dans le constructeur de l'entité
            // Si tu as ajouté le champ statut au formulaire, il sera mis à jour ici

            $entityManager->persist($guideTouristique);
            $entityManager->flush();

            $this->addFlash('success', 'Le guide touristique a été créé avec succès.');

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
    public function edit(Request $request, GuideTouristique $guideTouristique, EntityManagerInterface $entityManager, FileUploader $fileUploader, Filesystem $filesystem): Response
    {
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();

            if ($photoFile) {
                // Supprimer l'ancienne photo si elle existe
                $oldPhotoFilename = $guideTouristique->getPhotoFilename();
                if ($oldPhotoFilename) {
                    $filesystem->remove($this->getParameter('uploads_directory') . '/' . $oldPhotoFilename);
                }

                // Uploader la nouvelle photo
                $photoFilename = $fileUploader->upload($photoFile);
                $guideTouristique->setPhotoFilename($photoFilename);
            }
            // Si aucun nouveau fichier n'est uploadé, la photo existante est conservée

            $entityManager->flush();

            $this->addFlash('success', 'Le guide touristique a été mis à jour avec succès.');

            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_touristique/edit.html.twig', [
            'guide_touristique' => $guideTouristique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_touristique_delete', methods: ['POST'])]
    public function delete(Request $request, GuideTouristique $guideTouristique, EntityManagerInterface $entityManager, Filesystem $filesystem): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guideTouristique->getId(), $request->request->get('_token'))) {
            // Supprimer la photo associée si elle existe
            $photoFilename = $guideTouristique->getPhotoFilename();
            if ($photoFilename) {
                 $filesystem->remove($this->getParameter('uploads_directory') . '/' . $photoFilename);
            }

            $entityManager->remove($guideTouristique);
            $entityManager->flush();

            $this->addFlash('success', 'Le guide touristique a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
    }
}
