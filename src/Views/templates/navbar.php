    <!-- <nav class="navbar">
        <div class="container-fluid border border-primary">

            <a class="navbar-brand text-white ms-3 coiny-regular" href="index.php">AFPA'nnonces</a>
            <a href="index.php" class="btn btn-outline-light text-start">DEPOSER UNE ANNONCE</a>

            <div class="d-flex border border-danger">

                <div class="d-flex justify-content-center text-center border">
                    <form role="search" class="d-flex align-items-center mx-4">
                        <input class="form-control me-2 d-block" type="search" placeholder="Cartes Pokemon ..." aria-label="Search" />
                        <button class="btn btn-outline-light d-block" type="button">Rechercher</button>
                    </form>
                </div>

                <div class="d-flex flex-column justify-content-center text-center px-3">
                    <a href="index.php?url=<?= isset($_SESSION["user"]) ? "profil" : "login" ?>" class="text-white text-decoration-none">
                        <i class="bi bi-person-fill h1 m-0"></i>
                        <p class="m-0"><?= $_SESSION["user"]["username"] ?? "Se connecter" ?></p>
                    </a>
                </div>

            </div>

        </div>
    </nav> -->
    <div class="row justify-content-center m-0">
        <div class="col-10 border">
            <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow px-4">
                <div class="container-fluid">
                    <a class="navbar-brand coiny-regular" href="index.php">AFPA'nnonces</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="btn btn-warning" aria-current="page" href="index.php?url=create"><i class="bi bi-plus-circle me-2"></i>Créer une annonce</a>
                            </li>
                        </ul>

                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Carte dracaufeu ... " aria-label="Search" />
                            <button class="btn btn-outline-success" type="button">Rechercher</button>
                        </form>

                        <a href="index.php?url=<?= isset($_SESSION["user"]) ? "profil" : "login" ?>" class="text-dark text-decoration-none">

                            <div class="d-flex flex-column justify-content-center text-center align-items-center border">
                                <i class="bi bi-person-fill my-profil"></i>
                                <div>
                                    <?= $_SESSION["user"]["username"] ?? "Se connecter" ?>
                                </div>
                            </div>

                        </a>

                    </div>
                </div>
            </nav>
        </div>
    </div>