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


    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand text-white h1 ms-3" href="index.php">AFPA'nnonces</a>
            <div class="d-flex">
                <div>
                    <form role="search" class="d-flex align-items-center mt-2 mx-4">
                        <input class="form-control me-2 d-block" type="search" placeholder="Cartes Pokemon ..." aria-label="Search" />
                        <button class="btn btn-outline-light d-block" type="button">Rechercher</button>
                    </form>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <a href="index.php?url=register" class="text-white"><i class="bi bi-person-fill display-5"></i></a>
                </div>
            </div>
        </div>
    </nav>


    <main class="container py-4">

        <h1 class="text-center">C'est parti !!!</h1>

        <div class="row justify-content-center">

            <div class="col-6">

                <p>Votre inscription a bien été prise en compte, vous pouvez maintenant <a href="index.php?url=login">vous connecter</a>.</p>

            </div>

        </div>

    </main>


    <footer class="mt-auto text-center p-4 mt-3">
        <p class="m-0">Afpa - 2025 - MVC</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>