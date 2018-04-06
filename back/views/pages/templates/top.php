<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:05
 */
?>
<div id="top">
    <!-- .navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=dashboard" class="navbar-brand"><img src="<?php echo $baseUrl ?>/back/views/assets/img/logo.png" alt=""></a>
            </header>

            <div class="topnav">
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Plein écran" data-toggle="tooltip"
                       class="btn btn-default btn-sm" id="toggleFullScreen">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="<?php echo $baseUrl ?>/back/controllers/logout-controller.php" data-toggle="tooltip" data-original-title="Déconnexion" data-placement="bottom"
                       class="btn btn-metis-1 btn-sm">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Afficher / Cacher les Menus" data-toggle="tooltip"
                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- /.navbar -->
    <header class="head">
        <div class="main-bar">
            <h3>
                <i class="fa fa-home"></i>&nbsp;
                Administration
            </h3>
        </div>
        <!-- /.main-bar -->
    </header>
    <!-- /.head -->
</div>
<!-- /#top -->
