<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 13:15
 */

$condition = "2 < 3 LIMIT 4";
$platsAccueil = (new \dao\PlatDao())->findWithCondition($condition);

?>
