<?php
// src/Service/FileUploader.php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface; // Importe SluggerInterface

class FileUploader
{
    private string $targetDirectory;
    private SluggerInterface $slugger; // Injecte SluggerInterface

    public function __construct(string $targetDirectory, SluggerInterface $slugger) // Injecte SluggerInterface
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger; // Assigne SluggerInterface
    }

    public function upload(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        // Utilise SluggerInterface pour créer un nom de fichier sûr
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // Gère l'exception si quelque chose se passe mal pendant l'upload
            // Tu peux logger l'erreur ou la relancer
            throw new FileException('Impossible d\'uploader le fichier : ' . $e->getMessage());
        }

        return $fileName;
    }

    public function getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }
}
