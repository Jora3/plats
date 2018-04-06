<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 15:12
 */

$categories1 = (new \dao\CategorieDao())->findAll();
$plats = array();

foreach ($categories1 as $category) {
    if ($category instanceof \model\Categorie) {
        $condition = "idCategorie = " . $category->getId();
        array_push($plats, (new \dao\PlatDao())->findWithCondition($condition));
    }
}
$fin = count($plats);

?>
