<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 19:40
 */

$unites = (new \utils\LoaderData("unite"))->load();

?>
<div class="box">
    <header class="dark">
        <div class="icons"><i class="fa fa-check"></i></div>
        <h5>Ajouter une matière première</h5>
        <!-- .toolbar -->
        <div class="toolbar">
            <nav style="padding: 8px;">
                <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                    <i class="fa fa-minus"></i>
                </a>
                <a href="javascript:;" class="btn btn-default btn-xs full-box">
                    <i class="fa fa-expand"></i>
                </a>
            </nav>
        </div>
        <!-- /.toolbar -->
    </header>

    <div id="collapse2" class="body">
        <form action="<?php echo $baseUrl ?>/back/controllers/ajouts-controller.php?data=mp" method="post" class="form-horizontal" id="popup-validation">

            <div class="form-group">
                <label for="nom" class="control-label col-lg-4">Nom</label>
                <div class="col-lg-4">
                    <input type="text" class="validate[required] form-control" name="nom" id="nom">
                </div>
            </div>

            <div class="form-group">
                <label for="unite" class="control-label col-lg-4">Unité</label>
                <div class="col-lg-4">
                    <select class="validate[required] form-control" name="unite" id="unite">
                        <option value="1">Sélectionnez une unité</option>
                        <?php
                        foreach ($unites as $unite) {
                            if ($unite instanceof \model\Unite) {
                                ?>
                                <option value="<?php echo $unite->getId() ?>"><?php echo $unite->getNomUnite() ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-4 col-lg-4">
                    <input type="submit" value="Valider" class="btn btn-primary pull-right">
                </div>
            </div>
        </form>
    </div>
</div>
