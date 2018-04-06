<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 17:47
 */

try {
    require_once "page-controller.php";
    require_once "require.php";

    $data = $_GET['data'];

    $url = "Location: http://localhost/my-apps/plats/back/views/pages/templates/template.php?page=";

    $dossier = "../../front/views/assets/img/plats/";

    switch ($data) {
        case "plat":
            (new \dao\PlatDao())->save(new \model\Plat(1, $_POST['nom'], $_POST['description'], str_replace(" ", "-", $_POST['nom']), $_POST['categorie'], $_POST['specialite'], ""));
            uploadImagePlat($_FILES['image'], $_POST['nom'], $dossier);
            $url .= "liste-plats";
            header($url);
            break;
        case "categorie":
            (new \dao\CategorieDao())->save(new \model\Categorie(1, $_POST['nom'], $_POST['description']));
            $url .= "liste-categories";
            header($url);
            break;
        case "specialite":
            (new \dao\SpecialiteDao())->save(new \model\Specialite(1, $_POST['nom'], $_POST['description']));
            $url .= "liste-specialites";
            header($url);
            break;
        case "mp":
            (new \dao\MatierePremiereDao())->save(new \model\MatierePremiere(1, $_POST['nom'], $_POST['unite']));
            $url .= "liste-mps";
            header($url);
            break;
        case "unite":
            (new \dao\UniteDao())->save(new \model\Unite(1, $_POST['unite']));
            $url .= "liste-unites";
            header($url);
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

/**
 * @param $file
 * @param $fileName
 * @throws Exception
 */
function uploadImagePlat($file, $fileName, $dossier) {
    $oldFichier = $dossier . basename($file['name']);
    $fileType = pathinfo($oldFichier, PATHINFO_EXTENSION);
    $fichier = $dossier  . $fileName . "." . $fileType;
    if (checkFake($file)) {
        if (checkExist($fichier)) {
            if (checkSize($file)) {
                if (checkFormat($fileType)) {
                    move_uploaded_file($file['tmp_name'], $fichier);
                }
                else throw new Exception("Désolé, les extensions autorisés sont : jpg, jpeg et png");
            }
            else throw new Exception("Ce fichier est trop volumineux");
        }
        else throw new Exception("Désolé, cet image existe déjà");
    }
    else throw new Exception("Le fichier n'est pas un image");
}

/**
 * @param $fileType
 * @return bool
 */
function checkFormat($fileType) {
    if ($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png")
        return false;
    return true;
}

/**
 * @param $file
 * @return bool
 */
function checkSize($file) {
    return $file['size'] < 1000000;
}

/**
 * @param $fichier
 * @return bool
 */
function checkExist($fichier) {
    return !file_exists($fichier);
}

/**
 * @param $file
 * @return bool
 */
function checkFake($file) {
    if (getimagesize($file['tmp_name']) !== false)
        return true;
    return false;
}
