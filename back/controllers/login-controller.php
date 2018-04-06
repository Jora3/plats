<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 17:00
 */

try {
    require_once "require.php";

    $identifiant = $_POST['identifiant'];
    $pass = $_POST['pass'];

    $login = new \utils\Login($identifiant, $pass);
    $admin = $login->login();
    if ($admin != null) {
        session_start();
        $compte = array(
            "idAdmin" => $admin->getId(),
            "identifiant" => $admin->getIdentifiant(),
            "pass" => $admin->getPass()
        );
        $_SESSION['admin'] = $compte;
        header("Location: ../index.php");
    }
    else
        header("Location: ../views/pages/login.php?erreur=oui");
}
catch (Exception $exception) {
    session_start();
    $_SESSION['erreur'] = $exception->getMessage();
    header("Location: http://localhost/my-apps/plats/back/views/pages/erreur.php");
}

?>

