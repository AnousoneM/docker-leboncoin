    <nav class="navbar">
        <div class="container-fluid">

            <a class="navbar-brand text-white ms-3 coiny-regular" href="index.php">AFPA'nnonces</a>
            <div class="d-flex">
                <div class="d-flex flex-column justify-content-center text-center">
                    <a href="" class="btn btn-outline-light">DEPOSER UNE ANNONCE</a>
                    <form role="search" class="d-flex align-items-center mx-4">
                        <input class="form-control me-2 d-block" type="search" placeholder="Cartes Pokemon ..." aria-label="Search" />
                        <button class="btn btn-outline-light d-block" type="button">Rechercher</button>
                    </form>
                </div>
                <div class="d-flex flex-column justify-content-center text-center px-3">
                    <a href="index.php?url=<?= isset($_SESSION["user"]) ? "profile" : "login" ?>" class="text-white text-decoration-none">
                        <i class="bi bi-person-fill display-5"></i>
                        <p class="m-0"><?= $_SESSION["user"]["username"] ?? "Se connecter" ?></p>
                    </a>
                </div>
            </div>

        </div>
    </nav>