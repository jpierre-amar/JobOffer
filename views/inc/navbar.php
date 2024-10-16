<?php
$result = null;

if (isset($_SESSION['user']['user_id'])) {
    $userId = $_SESSION['user']['user_id'];

    $userModel = new UserModel();
    $result = $userModel->getFirstnameById($userId);
}

if (isset($_GET['logout']) && $_GET['logout'] == 'disconnect'){
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="bi bi-calendar-heart ms-4"></i> Tinder Job</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-center w-100">
            <p class="text-light text-center h3">
                <?php
                if ($result) {
                    echo "Bonjour " . htmlspecialchars($result) . " !";
                } else {
                    echo "Bonjour, Invité !";
                }
                ?>
            </p>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'profil' ? 'active' : '' ?>" href="index.php?ctrl=User&action=gotoProfile">Profils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'administration' ? 'active' : '' ?>" href="index.php?ctrl=User&action=admin">Administration</a>
                </li>
            </ul>
            <div class="me-1 ms-5 p-3">
                <?php
                if(isset($_SESSION['user'])){
                    echo '<a class="btn btn-outline-light btn-sm nav-link bg-light text-decoration-none px-3 py-1" href="index.php?logout=disconnect">Logout</a>';
                }
                else{
                    echo '<a class="btn btn-outline-light btn-sm nav-link bg-light text-decoration-none px-3 py-1" href="index.php?ctrl=User&action=login">Connexion</a>';
                }
                ?>
            </div>
            <div class="me-5">
                <?php
                if(isset($_SESSION['user'])){
                    echo '';
                }
                else{
                    echo '<a class="btn btn-outline-light btn-sm nav-link bg-light text-decoration-none px-3 py-1" href="index.php?ctrl=User&action=redirectRegister">Inscription</a>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>