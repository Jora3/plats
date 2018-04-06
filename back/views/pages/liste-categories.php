<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 08:19
 */

require_once "../../../controllers/listes-controller.php";

$fin = count($donnees);

?>
<div class="box">
    <header>
        <div class="icons"><i class="fa fa-table"></i></div>
        <h5>Liste des catégories</h5>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>
            <?php
            for ($i = 0; $i < $fin; $i++) {
                $categorie = $donnees[$i];
                if ($categorie instanceof \model\Categorie) {
                    ?>
                    <tr>
                        <td><?php echo $categorie->getId() ?></td>
                        <td><?php echo $categorie->getNomCategorie() ?></td>
                        <td><?php echo $categorie->getDescriptionCategorie() ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>