<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="style3.css">
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

<body>

    <!-- PHP - Accès aux données -->
    <?php
        require('config.php');
        session_start();
        if (isset($_POST['username']))
        {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($conn, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1)
            {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit();
            } else
            {
                $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            }
        }
    ?>

    <!-- Formulaire de connexion -->
    <form action="dashboard.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="file:///home/louise/Bureau/Exercices/Cyber-games/Page%20de%20connexion/index.html"><img src="Logo.png" alt=""></a>
                </div>
                <div class="col-4"></div>
                <div class="col-4 mail">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre adresse e-mail" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Entrez votre mot de passe" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-12">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi !</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
                <div class="col-12">
                    <p class="text">Pas encore inscrit ?<a href="register.php"> S'inscrire'</a></p>
                    <?php 
                        if (! empty($message)) { ?>
                            <p class="errorMessage"><?php echo $message; ?></p>
                            <?php 
                        } ?>
                </div>                   
            </div>
        </div>
    </form>
</body>
</html>
