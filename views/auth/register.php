<?php

?>
<div class="container mt-5 d-flex justify-content-center">
    <div class="mb-5" aria-label="Basic example">
        <button type="button" class="btn btn-secondary btn-lg" id="btn1">Candidat</button>
        <button type="button" class="btn btn-secondary btn-lg" id="btn2">Entreprise</button>
    </div>
</div>

<div id="content1">
    <div class="container-fluid flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg" style="min-width: 600px;">
            <div class="row g-0">
                    <div class="card-body p-5">
                        <h2 class="text-center">Espace Candidat</h2>
                        <h3 class="card-title text-center mb-4">Inscription</h3>

                                               <!-- INSCRIPTION CANDIDAT -->

                        <form method="POST" action="index.php?ctrl=User&action=register">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="fistname" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre prénom" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="form-label">Spécialité</label>
                                <select class="form-select" name="speciality" id="inlineFormSelectPref">
                                    <option selected>Choissez</option>
                                    <option value="1">Développeur front-end</option>
                                    <option value="2">Développeur back-end</option>
                                    <option value="3">Développeur full stack</option>
                                    <option value="4">Développeur jeux-vidéo</option>
                                    <option value="5">Webdesigner</option>
                                    <option value="6">UI designer</option>
                                    <option value="5">UX designer</option>
                                    <option value="6">Game master</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="pwd" placeholder="Votre mot de passe" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Confirmez le mot de passe</label>
                                <input type="password" class="form-control" id="password" name="confPwd" placeholder="Votre mot de passe" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="content2" style="display: none;">
    <div class="container-fluid flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg" style="min-width: 600px;">
                    <div class="card-body p-5">
                        <h2 class="text-center">Espace Entreprise</h2>
                        <h3 class="card-title text-center mb-4">Inscription</h3>

                                                <!-- INSCRIPTION ENTREPRISE -->

                        <form method="POST" action="../../index.php?ctrl=User&action=register">
                            <div class="mb-3">
                                <label for="name" class="form-label">Raison sociale</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'entreprise" required>
                            </div>
                            <div class="mb-3">
                                <label for="siret" class="form-label">Siret</label>
                                <input type="text" class="form-control" id="siret" name="siret" placeholder="Numéro de siret" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="pwd" placeholder="Votre mot de passe" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Confirmez le mot de passe</label>
                                <input type="password" class="form-control" id="confpassword" name="confPwd" placeholder="Votre mot de passe" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<script>
    document.getElementById('btn1').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('btn2').classList.remove('active');
        document.getElementById('content1').style.display = 'block';
        document.getElementById('content2').style.display = 'none';
    });

    document.getElementById('btn2').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('btn1').classList.remove('active');
        document.getElementById('content2').style.display = 'block';
        document.getElementById('content1').style.display = 'none';
    });
</script>