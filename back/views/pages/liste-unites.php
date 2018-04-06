<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 18:02
 */

require_once "../../../controllers/listes-controller.php";

$fin = count($donnees);

?>
<div class="box">
    <header>
        <div class="icons"><i class="fa fa-table"></i></div>
        <h5>Liste des unités</h5>
    </header>
    <div id="collapse4" class="body">
        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Unité</th>
                </tr>
            </thead>

            <tbody>
            <?php
            for ($i = 0; $i < $fin; $i++) {
                $unite = $donnees[$i];
                if ($unite instanceof \model\Unite) {
                    ?>
                    <tr>
                        <td><?php echo $unite->getId() ?></td>
                        <td><?php echo $unite->getNomUnite() ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
