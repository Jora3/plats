<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 18:08
 */

try {
    $page = $_GET['page'];

    $donnees = array();

    switch ($page) {
        case "liste-plats":
            $donnees = (new \dao\PlatDao())->findAll();
            break;
        case "liste-categories":
            $donnees = (new \dao\CategorieDao())->findAll();
            break;
        case "liste-specialites":
            $donnees = (new \dao\SpecialiteDao())->findAll();
            break;
        case "liste-mps":
            $donnees = (new \dao\MatierePremiereDao())->findAll();
            break;
        case "liste-unites":
            $donnees = (new \dao\UniteDao())->findAll();
            break;
        default:
            break;
    }
}
catch (Exception $exception) {
    session_start();
    $_SESSION['erreur'] = $exception->getMessage();
    header("Location: http://localhost/my-apps/plats/back/views/pages/erreur.php");
}
