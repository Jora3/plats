<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 09:25
 */

require_once "../../../controllers/listes-controller.php";

$fin = count($donnees);

?>
<div class="box">
    <header>
        <div class="icons"><i class="fa fa-table"></i></div>
        <h5>Liste des plats</h5>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Spécialité</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>
            <?php
            for ($i = 0; $i < $fin; $i++) {
                $plat = $donnees[$i];
                if ($plat instanceof \model\Plat) {
                    ?>
                    <tr>
                        <td><?php echo $plat->getId() ?></td>
                        <td><?php echo $plat->getNomPlat() ?></td>
                        <td><?php echo $plat->getCategorie()->getNomCategorie() ?></td>
                        <td><?php echo $plat->getSpecialite()->getNomSpecialite() ?></td>
                        <td><?php echo $plat->getDescriptionPlat() ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
