<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 13:42
 */

require_once "../../../controllers/plats-controller.php";

?>
<div class="grid_6">
    <h1 style="font-size: 32px;">Liste de plats</h1><br>
    <div class="menu">
        <?php
        for ($i = 0; $i < $fin; $i++) {
            $plat = $plats[$i];
            if ($plat instanceof \model\Plat) {
                $class = "omega";
                if (($i % 2) == 0) $class = "alpha";
                ?>
                <div class="grid_3 <?php echo $class ?>">
                    <img width="200" height="150" src="<?php echo $baseUrl ?>/front/views/assets/img/plats/<?php echo $plat->getImage() ?>.jpg" alt="<?php echo $plat->getImage() ?>" class="img_inner">
                    <h4><a href="<?php echo $baseUrl ?>/plat/plats_<?php echo str_replace(" ", "_", $plat->getNomPlat()) ?>-<?php echo $plat->getId() ?>gourmet.html"><?php echo $plat->getNomPlat() ?></a></h4><br>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="clear"></div>
</div>
<div class="grid_5 prefix_1">
    <h2 class="head2">Catégories</h2>
    <ul class="list l1">
        <?php
        foreach ($categories as $category) {
            if ($category instanceof \model\Categorie) {
                ?>
                <li><a href="<?php echo $baseUrl ?>/plats-par-categorie/plats-<?php echo $category->getId() ?>gourmet.html"> <?php echo $category->getNomCategorie() ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
    <h2 class="head1">Spécialités</h2>
    <ul class="list">
        <?php
        foreach ($specialites as $specialite) {
            if ($specialite instanceof \model\Specialite) {
                ?>
                <li><a href="<?php echo $baseUrl ?>/plats-par-specialite/plats-<?php echo $specialite->getId() ?>gourmet.html"> <?php echo $specialite->getNomSpecialite() ?></a></li>
                <?php
            }
        }
        ?>
    </ul>
</div>
<div class="clear"></div>
