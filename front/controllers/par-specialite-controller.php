<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 15:48
 */

$specialites1 = (new \dao\SpecialiteDao())->findAll();
//$specialites1 = (new \dao\SpecialiteDao())->findWithCondition("1 < 2 ORDER BY idSpecialite DESC");
$plats = array();

foreach ($specialites1 as $specialite) {
    if ($specialite instanceof \model\Specialite) {
        $condition = "idSpecialite = " . $specialite->getId();
        array_push($plats, (new \dao\PlatDao())->findWithCondition($condition));
    }
}
$fin = count($plats);

?>