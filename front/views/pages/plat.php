<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 13:33
 */

require_once "../../../controllers/plat-controller.php";

?>
<div valeur="<?php echo $plat->getNomPlat() ?>" id="plat" class="grid_5">
    <h1 style="font-size: 32px;"><?php echo $plat->getNomPlat() ?></h1><br>
    <div class="news">
        <img src="<?php echo $baseUrl ?>/front/views/assets/img/plats/<?php echo $plat->getImage() ?>.jpg" alt="<?php echo $plat->getImage() ?>" class="img_inner fleft">
    </div>
</div>
<div class="grid_5 prefix_2">
    <h2 class="head2">Description</h2>
    <ul class="list l1">
        <li>A propos de ce plat : <?php echo $plat->getDescriptionPlat() ?></li>
    </ul>
    <h2 class="head2">Catégorie</h2>
    <ul class="list l1">
        <li><?php echo $plat->getCategorie()->getNomCategorie() ?></li>
    </ul>
    <h2 class="head2">Spécialité</h2>
    <ul class="list">
        <li><?php echo $plat->getSpecialite()->getNomSpecialite() ?></li>
    </ul>
</div>
<div class="clear"></div>
