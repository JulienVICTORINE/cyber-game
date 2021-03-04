<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style(2).css">
    <link rel="stylesheet" href="javascript.js">

    <!-- Intégration de Bootstrap -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- The sidebar -->
    <div class="sidebar">
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                <a href="file:////var/www/html/cybercafe/login.php">Page de Connexion</a>
                    <a href="file:////var/www/html/cybercafe/dashboard.php">Tableau de bord</a>
                    <a href="file:////var/www/html/cybercafe/index4.html">Ajout de réservation</a>
                    <a href="file:////var/www/html/cybercafe/register.php">Inscription</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Page content -->
    <div class="content"></div>
</head>

<body class="background-theme">

    <div class="row">
        <div class="container">
            <div class="col-12">
                <a href="file:///home/louise/Bureau/Exercices/Cyber_games/Login/index.html"><img src="Logo.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class="row gamer">
        <div class="container">
            <h1>Gamers</h1>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
        </div>
    </div>
    <div class="row bureautique">
        <div class="container">
            <h1>Bureautique</h1>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
        </div>
    </div>
    <div class="row creation_contenu">
        <div class="container">
            <h1>Création de contenu</h1>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
            <div class="col-4">
                <img src="pc2.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>