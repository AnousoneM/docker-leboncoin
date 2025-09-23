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
            <a href="index.php?url=home" class="btn btn-outline-primary btn-sm mt-3">Retour aux annonces</a>
        </div>

        <hr>

        <div class="row mt-3">

            <div class="col">
                <img src="/uploads/<?= $annonce["a_picture"] ?? 'no_picture.png' ?>" alt="Image de l'annonce" class="img-fluid">
            </div>
            <div class="col">
                <p class="h5"><?= $annonce["a_title"] ?></p>
                <p class="h5"><?= $annonce["a_title"] ?></p>
                <p class="card-text"><?= $annonce["a_description"] ?></p>
            </div>

        </div>

        <!-- <div class="row mt-3">

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="/uploads/<?= $annonce["a_picture"] ?? 'no_picture.png' ?>" class="img-annonce" alt="Image de l'annonce">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= $annonce["a_title"] ?></h5>
                        <p class="card-text"><?= $annonce["a_price"] . ' €' ?></p>
                    </div>
                </div>
            </div>

        </div> -->

    </main>

    <?php include_once __DIR__ . "/templates/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>