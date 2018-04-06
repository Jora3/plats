<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05/04/2018
 * Time: 09:16
 */

$categories = (new \utils\LoaderData("categorie"))->load();
$specialites = (new \utils\LoaderData("specialite"))->load();

?>
<div class="box">
    <header class="dark">
        <div class="icons"><i class="fa fa-check"></i></div>
        <h5>Ajouter un plat</h5>
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
        <form enctype="multipart/form-data" action="<?php echo $baseUrl ?>/back/controllers/ajouts-controller.php?data=plat" method="post" class="form-horizontal" id="popup-validation">

            <div class="form-group">
                <label for="nom" class="control-label col-lg-4">Nom</label>
                <div class="col-lg-4">
                    <input type="text" class="validate[required] form-control" name="nom" id="nom">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="control-label col-lg-4">Description</label>
                <div class="col-lg-4">
                    <textarea class="validate[required] form-control" name="description" id="description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="control-label col-lg-4">Image</label>
                <div class="col-lg-4">
                    <input type="file" class="validate[required]" name="image" id="image">
                </div>
            </div>

            <div class="form-group">
                <label for="categorie" class="control-label col-lg-4">Catégorie</label>
                <div class="col-lg-4">
                    <select class="validate[required] form-control" name="categorie" id="categorie">
                        <option value="1">Sélectionnez une catégorie</option>
                        <?php
                        foreach ($categories as $category) {
                            if ($category instanceof \model\Categorie) {
                                ?>
                                <option value="<?php echo $category->getId() ?>"><?php echo $category->getNomCategorie() ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="specialite" class="control-label col-lg-4">Spécialité</label>
                <div class="col-lg-4">
                    <select class="validate[required] form-control" name="specialite" id="specialite">
                        <option value="1">Sélectionnez une spécialité</option>
                        <?php
                        foreach ($specialites as $specialite) {
                            if ($specialite instanceof \model\Specialite) {
                                ?>
                                <option value="<?php echo $specialite->getId() ?>"><?php echo $specialite->getNomSpecialite() ?></option>
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