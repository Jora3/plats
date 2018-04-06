<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 18:51
 */

session_start();
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
    <title>Une erreur s'est produite</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/font-awesome/css/font-awesome.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/metismenu/metisMenu.css">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/onoffcanvas/onoffcanvas.css">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl ?>/back/views/assets/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="error">
<div class="container">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <div class="logo">
            <h1><?php if (isset($_SESSION['erreur'])) echo $_SESSION['erreur']; ?></h1>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
            <div class="btn-group btn-group-justified">
                <a href="<?php echo $baseUrl ?>/front/index.php" class="btn btn-info">Revenir à l'accueil</a>
            </div>
        </div>
    </div>
    <!-- /.col-lg-8 col-offset-2 -->
</div>
</body>

</html>
