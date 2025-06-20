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
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; // Importe le service d'encodage
use Psr\Log\LoggerInterface; // Optionnel : pour logger les erreurs d'upload

#[Route('/admin/guide_touristique')]
class GuideTouristiqueController extends AbstractController
{
    // Injection des dépendances dans le constructeur
    public function __construct(
        private GuideTouristiqueRepository $guideTouristiqueRepository,
        private EntityManagerInterface $entityManager,
        private PaginatorInterface $paginator,
        private UserPasswordHasherInterface $passwordHasher, // Injection du service d'encodage
        private FileUploader $fileUploader, // Injection du service d'upload
        private Filesystem $filesystem, // Injection du service Filesystem
        // private LoggerInterface $logger // Optionnel : injecte le logger
    ) {
    }

    #[Route('/', name: 'app_guide_touristique_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $searchTerm = $request->query->get('q', '');

        // Utilise la méthode searchQuery de ton repository pour obtenir le QueryBuilder
        // Utilise $this->guideTouristiqueRepository car il est injecté dans le constructeur
        $query = $this->guideTouristiqueRepository->searchQuery($searchTerm);

        // Utilise le Paginator pour paginer les résultats
        // Utilise $this->paginator car il est injecté dans le constructeur
        $pagination = $this->paginator->paginate(
            $query, // La requête à paginer
            $request->query->getInt('page', 1), // Numéro de page (par défaut 1)
            10 // Nombre d'éléments par page (adapte selon tes besoins)
        );

        return $this->render('guide_touristique/index.html.twig', [
            'pagination' => $pagination,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'app_guide_touristique_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response // Retire les injections déjà faites dans le constructeur
    {
        $guideTouristique = new GuideTouristique();
        // Passe l'option 'is_new' au formulaire
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique, ['is_new' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupère le mot de passe en clair du champ non mappé
            $plainPassword = $form->get('password')->getData();

            // Encode le mot de passe
            // Utilise $this->passwordHasher car il est injecté dans le constructeur
            $hashedPassword = $this->passwordHasher->hashPassword(
                $guideTouristique,
                $plainPassword
            );

            // Définit le mot de passe encodé sur l'entité
            $guideTouristique->setPassword($hashedPassword);

            //Logique pour l'upload de la photo
            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();

            if ($photoFile) {
                try {
                    // Utilise $this->fileUploader car il est injecté dans le constructeur
                    $photoFilename = $this->fileUploader->upload($photoFile);
                    $guideTouristique->setPhotoFilename($photoFilename);
                } catch (\Exception $e) {
                    // Gère l'erreur d'upload (par exemple, affiche un message flash)
                    // $this->logger->error('Upload failed: ' . $e->getMessage()); // Optionnel : log l'erreur
                    $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de la photo : ' . $e->getMessage());
                    // Tu peux choisir de ne pas persister l'entité si l'upload échoue
                    // return $this->render('guide_touristique/new.html.twig', [ ... ]);
                }
            }

            // Utilise $this->entityManager car il est injecté dans le constructeur
            $this->entityManager->persist($guideTouristique);
            $this->entityManager->flush();

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
    public function edit(Request $request, GuideTouristique $guideTouristique): Response // Retire les injections déjà faites dans le constructeur
    {
        // Passe l'option 'is_new' au formulaire (ici false car c'est une modification)
        $form = $this->createForm(GuideTouristiqueType::class, $guideTouristique, ['is_new' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

               // Gère la mise à jour du mot de passe uniquement si le champ a été rempli
            $plainPassword = $form->get('password')->getData();
            if ($plainPassword) { // Si un nouveau mot de passe a été saisi
                 // Utilise $this->passwordHasher car il est injecté dans le constructeur
                 $hashedPassword = $this->passwordHasher->hashPassword(
                    $guideTouristique,
                    $plainPassword
                );
                $guideTouristique->setPassword($hashedPassword);
            }

            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photoFile')->getData();

            if ($photoFile) {
                // Supprimer l'ancienne photo si elle existe
                $oldPhotoFilename = $guideTouristique->getPhotoFilename();
                if ($oldPhotoFilename) {
                    // Utilise $this->filesystem car il est injecté dans le constructeur
                    // Assure-toi que getParameter('uploads_directory') est accessible (via AbstractController)
                    $oldPhotoPath = $this->getParameter('uploads_directory') . '/' . $oldPhotoFilename;
                    if ($this->filesystem->exists($oldPhotoPath)) { // Vérifie si le fichier existe avant de supprimer
                         $this->filesystem->remove($oldPhotoPath);
                    }
                }

                // Uploader la nouvelle photo
                try {
                    // Utilise $this->fileUploader car il est injecté dans le constructeur
                    $photoFilename = $this->fileUploader->upload($photoFile);
                    $guideTouristique->setPhotoFilename($photoFilename);
                } catch (\Exception $e) {
                     // Gère l'erreur d'upload
                    // $this->logger->error('Upload failed: ' . $e->getMessage()); // Optionnel : log l'erreur
                    $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de la photo : ' . $e->getMessage());
                    // Tu peux choisir de ne pas flusher si l'upload échoue
                    // return $this->render('guide_touristique/edit.html.twig', [ ... ]);
                }
            }
            // Si aucun nouveau fichier n'est uploadé, la photo existante est conservée

            // Utilise $this->entityManager car il est injecté dans le constructeur
            $this->entityManager->flush();

            $this->addFlash('success', 'Le guide touristique a été mis à jour avec succès.');

            return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('guide_touristique/edit.html.twig', [
            'guide_touristique' => $guideTouristique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_guide_touristique_delete', methods: ['POST'])]
    public function delete(Request $request, GuideTouristique $guideTouristique): Response // Retire les injections déjà faites dans le constructeur
    {
        if ($this->isCsrfTokenValid('delete'.$guideTouristique->getId(), $request->request->get('_token'))) {
            // Supprimer la photo associée si elle existe
            $photoFilename = $guideTouristique->getPhotoFilename();
            if ($photoFilename) {
                 // Utilise $this->filesystem car il est injecté dans le constructeur
                 // Assure-toi que getParameter('uploads_directory') est accessible (via AbstractController)
                 $photoPath = $this->getParameter('uploads_directory') . '/' . $photoFilename;
                 if ($this->filesystem->exists($photoPath)) { // Vérifie si le fichier existe avant de supprimer
                    $this->filesystem->remove($photoPath);
                 }
            }

            // Utilise $this->entityManager car il est injecté dans le constructeur
            $this->entityManager->remove($guideTouristique);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le guide touristique a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_guide_touristique_index', [], Response::HTTP_SEE_OTHER);
    }
}
