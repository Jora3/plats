<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/04/2018
 * Time: 09:56
 */

$page = $_POST['page'];

$titlePages = null;

if (isset($_POST['plat'])) {
    $titlePages = array(
        "accueil" => "Accueil - Gourmet",
        "par-categorie" => "Plats par catégorie - Gourmet",
        "par-specialite" => "Plats par spécialité - Gourmet",
        "plats" => "Liste de plats - Gourmet",
        "plat" => "Plat - " . $_POST['plat'] . " - Gourmet"
    );
}
else {
    $titlePages = array(
        "accueil" => "Accueil - Gourmet",
        "par-categorie" => "Plats par catégorie - Gourmet",
        "par-specialite" => "Plats par spécialité - Gourmet",
        "plats" => "Liste de plats - Gourmet",
    );
}

$title = array(
    "valeur" => $titlePages[$page]
);

echo json_encode($title);

?>
