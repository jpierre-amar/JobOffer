<?php $current_page = "login"; ?>
<div class="d-flex flex-column">
    <div class="container-fluid flex-grow-1 d-flex align-items-center justify-content-center bg-light">
        <div class="card shadow-lg my-5">
            <div class="row g-0">
                    <div class="card-body my-5 mx-5">
                        <h2 class="card-title text-center mb-4">Connexion</h2>
                        <form method="POST" action="/JobOffer/index.php?ctrl=User&action=validateUser">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>