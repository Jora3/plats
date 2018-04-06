<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 13:53
 */

$condition = "1 < 2 AND ";

if (!empty($categorie))
    $condition .= "idCategorie = " . $categorie . " AND ";
if (!empty($specialite))
    $condition .= "idSpecialite = " . $specialite . " AND ";
$condition .= "1 < 2";

$plats = (new \dao\PlatDao())->findWithCondition($condition);
$fin = count($plats);

?>
