<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 18:51
 */

require_once "../../../controllers/accueil-controller.php";

$fin = count($platsAccueil);

?>
<div class="clear"></div>
<div class="grid_12">
    <div class="hor_separator"></div>
</div>
<div class="grid_12">
    <div class="car_wrap">
        <h2>Les plats populaires</h2>
        <a href="#" class="prev"></a><a href="#" class="next"></a>
        <ul class="carousel1">
            <?php
            foreach ($platsAccueil as $plat) {
                if ($plat instanceof \model\Plat) {
                    ?>
                    <li>
                        <div>
                            <img src="<?php echo $baseUrl ?>/front/views/assets/img/plats/<?php echo $plat->getImage() ?>.jpg" alt="<?php echo $plat->getImage() ?>">
                            <div class="col1 upp"><a href="<?php echo $baseUrl ?>/plat/plats_<?php echo str_replace(" ", "_", $plat->getNomPlat()) ?>-<?php echo $plat->getId() ?>gourmet.html"><?php echo $plat->getNomPlat() ?></a></div>
                            <span> Description de ce plat : <?php echo $plat->getDescriptionPlat() ?></span>
                            <div>
                                <a href="<?php echo $baseUrl ?>/plat/plats_<?php echo str_replace(" ", "_", $plat->getNomPlat()) ?>-<?php echo $plat->getId() ?>gourmet.html" class="btn">Voir les détails</a>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</div>

<div class="clear"></div>
