<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // je créé un tableau d'erreurs vide car pas d'erreur
            $errors = [];

            if (isset($_POST["username"])) {
                // on va vérifier si c'est vide
                if (empty($_POST["username"])) {
                    // si c'est vide, je créé une erreur dans mon tableau
                    $errors['username'] = 'Pseudo obligatoire';
                }
            }

            if (isset($_POST["email"])) {
                // on va vérifier si c'est vide
                if (empty($_POST["email"])) {
                    // si c'est vide, je créé une erreur dans mon tableau
                    $errors['email'] = 'Mail obligatoire';
                } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    // si mail non valide, on créé une erreur
                    $errors['email'] = 'Mail non valide';
                }
            }

            if (isset($_POST["password"])) {
                // on va vérifier si c'est vide
                if (empty($_POST["password"])) {
                    // si c'est vide, je créé une erreur dans mon tableau
                    $errors['password'] = 'Mot de passe obligatoire';
                } else if (strlen($_POST["password"]) < 8) {
                    // si le mot de passe est trop court, on créé une erreur
                    $errors['password'] = 'Mot de passe trop court (minimum 6 caractères)';
                }
            }

            if (isset($_POST["confirmPassword"])) {
                // on va vérifier si c'est vide
                if (empty($_POST["confirmPassword"])) {
                    // si c'est vide, je créé une erreur dans mon tableau
                    $errors['confirmPassword'] = 'Confirmation du mot de passe obligatoire';
                } else if ($_POST["confirmPassword"] !== $_POST["password"]) {
                    // si les deux mots de passe ne sont pas identiques, on créé une erreur
                    $errors['confirmPassword'] = 'Les mots de passe ne sont pas identiques';
                }
            }

            if (!isset($_POST["cgu"])) {
                // si la case n'est pas cochée, on créé une erreur
                $errors['cgu'] = 'Vous devez accepter les CGU';
            }
        }

        require_once __DIR__ . "/../Views/register.php";
    }

    public function login()
    {
        require_once __DIR__ . "/../Views/login.php";
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: index.php?url=login');
    }
}
