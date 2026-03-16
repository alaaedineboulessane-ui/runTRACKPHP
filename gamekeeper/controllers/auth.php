<?php
require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    public function register() {
        if (!empty($_POST)) {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $nom = $_POST['nom'] ?? '';
            $prenom = $_POST['prenom'] ?? '';

            if (!empty($username) && !empty($nom) && !empty($prenom) && !empty($password) 
                && strlen($username) >= 3 && strlen($password) >= 6 && preg_match('/[0-9]/', $password)) {

                $userModel = new UserModel();
                if ($userModel->register($nom, $prenom, $username, $password)) {
                    header("Location: index.php");
                    exit;
                } else {
                    $error = "Erreur lors de l'inscription.";
                }
            } else {
                $error = "Données invalides";
            }
        }

        require __DIR__ . '/../views/registerView.php';
    }
}