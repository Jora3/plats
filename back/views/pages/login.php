<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:50
 */

$baseUrl = "http://localhost/my-apps/plats";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Entrez votre identifiant et votre mot de passe</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/bootstrap/css/bootstrap.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/metismenu/metisMenu.css">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/onoffcanvas/onoffcanvas.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

<div class="form-signin">
    <div class="text-center">
        <img src="<?php echo $baseUrl ?>/back/views/assets/img/logo.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form method="post" action="<?php echo $baseUrl ?>/back/controllers/login-controller.php">
                <?php
                if (isset($_GET['erreur'])) {
                    ?>
                    <p style="color: red;" class="text-muted text-center">
                        Les informations sont incorrectes, veuillez recommencer
                    </p>
                    <?php
                }
                ?>
                <p class="text-muted text-center">
                    Entrez votre identifiant et votre mot de passe
                </p>
                <input name="identifiant" type="text" placeholder="Identifiant" class="form-control top">
                <input name="pass" type="password" placeholder="Mot de passe" class="form-control bottom">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            </form>
            <div>
                <h3 style="text-align: center;"><a href="<?php echo $baseUrl ?>/accueil/plats-gourmet.html">Revenir au site</a></h3>
            </div>
        </div>
    </div>
    <hr>
</div>


<!--jQuery -->
<script src="<?php echo $baseUrl ?>/back/views/assets/lib/jquery/jquery.js"></script>

<!--Bootstrap -->
<script src="<?php echo $baseUrl ?>/back/views/assets/lib/bootstrap/js/bootstrap.js"></script>
</body>

</html>
