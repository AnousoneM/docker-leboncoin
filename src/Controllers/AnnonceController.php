<?php

namespace App\Controllers;

use App\Models\Annonce;

class AnnonceController
{
    /**
     * Méthode affichant la liste des annonces
     *
     * @return void
     */
    public function index(): void
    {
        $objAnnonce = new Annonce();
        $annonces = $objAnnonce->findAll();
        require_once __DIR__ . "/../Views/annonces.php";
    }

    public function create(): void
    {

        // traitement du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // On crée un tableau d'erreurs vide
            $errors = [];

            // validation des champs

            // on vérifie que le titre n'est pas vide
            if (empty($_POST['title'])) {
                $errors['title'] = 'Le titre est obligatoire';
            }

            // on vérifie que la description n'est pas vide
            if (empty($_POST['description'])) {
                $errors['description'] = 'La description est obligatoire';
            }

            // on vérifie que le prix n'est pas vide et qu'il est bien un nombre positif
            if (empty($_POST['price'])) {
                $errors['price'] = 'Le prix est obligatoire';
                // on vérifie que le prix est un nombre positif
            } elseif (!is_numeric($_POST['price']) || $_POST['price'] < 0) {
                $errors['price'] = 'Le prix doit être un nombre positif';
            }
        }
        require_once __DIR__ . "/../Views/create.php";
    }
}
