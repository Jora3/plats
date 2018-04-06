<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 17:27
 */

try {
    $urlRegex = "#^http://localhost/my-apps/plats/([a-zA-Z-]*)/plats[a-zA-Z0-9_]*-([0-9]*)gourmet*\.html#";
    if (preg_match($urlRegex, $_SERVER['REDIRECT_URL'], $match)) {
        $page = $match[1];
        $identifiant = 1;
        $categorie = "";
        $specialite = "";
        if (strcasecmp($page, "plats-par-categorie") == 0) {
            $page = "plats";
            $categorie = $match[2];
        }
        if (strcasecmp($page, "plats-par-specialite") == 0) {
            $page = "plats";
            $specialite = $match[2];
        }
        if (strcasecmp($page, "plat") == 0)
            $identifiant = $match[2];
        require_once "template.php";
    }
    else throw new Exception("Impossible d'accéder à cette page");
}
catch (Exception $exception) {
    session_start();
    $_SESSION['erreur'] = $exception->getMessage();
    header("Location: http://localhost/my-apps/plats/front/views/pages/erreur.php");
}

?>