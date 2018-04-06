<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 17:20
 */
?>
<div class="box">
    <header class="dark">
        <div class="icons"><i class="fa fa-check"></i></div>
        <h5>Ajouter une unité</h5>
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
        <form action="<?php echo $baseUrl ?>/back/controllers/ajouts-controller.php?data=unite" method="post" class="form-horizontal" id="popup-validation">

            <div class="form-group">
                <label for="unite" class="control-label col-lg-4">Unité</label>
                <div class="col-lg-4">
                    <input type="text" class="validate[required] form-control" name="unite" id="unite">
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
