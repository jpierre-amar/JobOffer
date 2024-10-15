<?php

class UserModel extends CoreModel
{
    private $_req;

    public function __destruct()
    {
        if (!empty($this->_req)) {
            $this->_req->closeCursor();
        }
    }
// FONCTION CHECK MAIL
    public function checkMail($email, $password)
    {
        try {
            // Préparation de la requête SQL
            $stmt = $this->_db->prepare("SELECT use_id, use_pwd FROM user WHERE use_email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Récupération des informations de l'utilisateur
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Fermeture du curseur
            $stmt->closeCursor();

            // Retourner les informations de l'utilisateur ou false si non trouvé
            return $user ? $this->verify($user, $password) : false;
        } catch (PDOException $e) {
            // Gérer les exceptions PDO
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }

    public function verify ($user, $password){
        if ($user && password_verify($password, $user['use_pwd'])) {
            // Enregistrement de l'utilisateur en session
            $_SESSION['user']['user_id'] = $user['use_id'];
            header('Location: index.php');
        } else {
            header('Location: view/auth/login.php?error=1');
        }
    }

    // RÉCUPÉRER LE PRÉNOM GRACE À L'ID
    public function getFirstnameById($userId)
    {
        // Récupérer l'objet PDO
        $db = $this->getDb();

        // Préparer et exécuter la requête pour obtenir le prénom
        $query = $db->prepare('SELECT use_firstname FROM user WHERE use_id = ?');
        $query->execute([$userId]);

        // Récupérer le résultat
        $result = $query->fetch();

        // Retourner le prénom si trouvé, sinon null
        return $result ? $result['use_firstname'] : null;
    }

    // ENREGISTREMENT D'UN NOUVEL USER
    public function register() {

        $lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');
        $firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES, 'UTF-8');
        $speciality = htmlspecialchars($_POST['speciality'], ENT_QUOTES, 'UTF-8');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['pwd'];
        $confPassword = $_POST['confPwd'];

        if ($email === false) {
            echo 'Email invalide.';
        }

        if ($password !== $confPassword) {
            echo "Les mots de passe ne correspondent pas.";
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {

            $stmt = $this->_db->prepare("INSERT INTO user (use_lastName, use_firstName, use_speciality, use_email, use_pwd) VALUES (:lastname, :firstname, :speciality, :email, :password)");
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':speciality', $speciality);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                echo "Utilisateur enregistré avec succès.";
            } else {
                echo "Erreur lors de l'enregistrement de l'utilisateur.";
            }
        } catch (PDOException $e) {
            error_log("Erreur : " . $e->getMessage());
            echo "Une erreur est survenue lors de l'enregistrement. Veuillez réessayer plus tard.";
        }
    }

}