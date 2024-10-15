<?php
class UserController
{
    public function login(){
        include 'views/auth/login.php';
    }
    public function validateUser($post) {
        $email = $post['email'];
        $password = $post['password'];
        // Validation du format de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "L'adresse email est invalide.";
        }

        $userModel = new UserModel();
        $userModel->checkMail($email, $password);

    }

    // Fonction d'édition du profil
    public function editProfil()
    {
        // A FAIRE
    }
                // INSCRIPTION
    public function register() {
        $userModel = new UserModel();
        $userModel->register();
        header('Location: index.php?ctrl=Home&action=index&msg=');
    }
                // REDIRECTION REGISTER.PHP
    public function redirectRegister() {
        include 'views/auth/register.php';
    }
}