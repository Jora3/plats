<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 20:14
 */

require_once "../../../controllers/listes-controller.php";

$fin = count($donnees);

?>
<div class="box">
    <header>
        <div class="icons"><i class="fa fa-table"></i></div>
        <h5>Liste des matières premières</h5>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Unité</th>
            </tr>
            </thead>

            <tbody>
            <?php
            for ($i = 0; $i < $fin; $i++) {
                $mp = $donnees[$i];
                if ($mp instanceof \model\MatierePremiere) {
                    ?>
                    <tr>
                        <td><?php echo $mp->getId() ?></td>
                        <td><?php echo $mp->getNomMatierePremiere() ?></td>
                        <td><?php echo $mp->getUnite()->getNomUnite() ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
