<div class="text-center my-5">
    <h1 class="h1 display-1 text-center d-inline-block">Nos offres d'emploi</h1>
</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="index.php?ctrl=search&action=search" method="POST">
                <div class="input-group input-group-lg mb-3">
                    <select class="form-select form-select-lg custom-select narrow-select" id="searchFilter" aria-label="Filtre de recherche" name="search">
                        <option selected value="title">Toutes</option>
                        <option value="name">Skill</option>
                        <option value="city">Localisation</option>
                        <option value="company">Entreprise</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Que chercher vous ?" aria-label="Barre de recherche" name="searchInput">
                    <button class="btn btn-secondary btn-lg" type="submit"><i class="bi bi-search"></i> Recherche </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <?php if (isset($jobs) && is_array($jobs)) : ?>
        <?php foreach ($jobs as $job) : ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><?= $job->getTitle(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $job->getCompany(); ?></h6>
                        <!-- <p class="card-text"><?= $job->getDescription(); ?></p> -->
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt-fill me-2"></i><?= $job->getCity(); ?></li>
                            <li><i class="bi bi-clock-fill me-2"></i><?= $job->getType(); ?></li>
                            <li><i class="bi bi-cash-stack me-2"></i><?= $job->getSalary(); ?></li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="index.php?ctrl=User&action=showOffer" class="btn btn-primary w-100">En savoir plus</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <?php endif ?>
    </div>
</div>