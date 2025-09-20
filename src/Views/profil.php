<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFPA'nnonces</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">

    <!-- css perso -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- cdn icones bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body class="d-flex flex-column vh-100">

    <?php include_once __DIR__ . "/templates/navbar.php" ?>

    <main class="container flex-grow-1">
        <div>
            <h1 class="m-0">MON PROFIL</h1><a href="index.php?url=logout" class="btn btn-outline-danger btn-sm">Se deconnecter</a>
        </div>
        <p class="h1"><?= $_SESSION["user"]["username"] ?>, <span class="fs-6">inscrit depuis <?= explode('-', explode(' ', $_SESSION['user']['inscription'])[0])[0] ?></span></p>
        <hr>

        <?php
        // module pour afficher un message flash, on verifie si la variable de session existe.
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-' . $_SESSION['message']['message_type'] . '" role="alert">' . $_SESSION['message']['message'] . '</div>';
            // on supprime la variable de session
            unset($_SESSION['message']);
        }
        ?>
        <h2>Mes annonces</h2>

        <div class="row mt-3">
            <?php for ($i = 0; $i < rand(1, 9); $i++) { // boucle temporaire pour afficher les annonces 
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://picsum.photos/1280/720?random=<?= $i; ?>" class="card-img-top" alt="Image aléatoire">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Une Annonce</h5>
                            <p class="card-text"><?= rand(10, 1000) . ' €' ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

    <footer class="mt-auto text-center p-4 mt-3">
        <p class="m-0">Afpa - 2025 - MVC</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>