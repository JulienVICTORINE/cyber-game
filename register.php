<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style2.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous">
    </script>

    <!-- The sidebar (Menu burger)-->
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
                    <a href="login.php">Page de Connexion</a>
                    <a href="dashboard.php">Tableau de bord</a>
                    <a href="index4.html">Ajout de réservation</a>
                    <a href="register.php">Inscription</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="content"></div>
</head>

<body>

    <?php
        require('config.php');

        if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']))
        {
            // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($conn, $username);

            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($conn, $email);
            
            // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);
                        
            //requéte SQL + mot de passe crypté
            $query = "INSERT INTO `users` (username, email, password) VALUES ('$username', '$email', '".hash('sha256', $password)."')";
                        
            // Exécuter la requête sur la base de données
            $res = mysqli_query($conn, $query);

            echo "requête OK";
        }
    ?>

    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="index.html"><img src="Logo.png" alt=""></a>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mail">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Entrez un nom d'utilisateur" required>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez une adresse e-mail" required>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez un mot de passe" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="passwordConf" placeholder="Confirmation de votre mot de passe" required>                    
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>

                <div class="col-12">
                    <p class="box-register">Déjà inscrit ? <a href="login.php">Se connecter</a></p>
                </div>
            </div>
        </div>
    </form>
</body>

</html>