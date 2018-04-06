<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:09
 */

$admin = $_SESSION['admin'];

?>
<div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo $baseUrl ?>/back/views/assets/img/user.gif">
            </a>

            <div class="media-body">
                <h5 class="media-heading"><a href="#"><?php echo $admin['identifiant'] ?></a></h5>
                <ul class="list-unstyled user-info">
                    <li>Administrateur</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="">
            <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=dashboard">
                <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Tableau de bord</span>
            </a>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-pencil"></i>
                <span class="link-title">Ajouts</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=ajout-plat">
                        <i class="fa fa-angle-right"></i>&nbsp; Plat
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=ajout-unite">
                        <i class="fa fa-angle-right"></i> Unité
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=ajout-mp">
                        <i class="fa fa-angle-right"></i> Matière première
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=ajout-specialite">
                        <i class="fa fa-angle-right"></i> Spécialité
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=ajout-categorie">
                        <i class="fa fa-angle-right"></i> Catégorie
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                <i class="fa fa-table"></i>
                <span class="link-title">Listes</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=liste-plats">
                        <i class="fa fa-angle-right"></i>&nbsp; Plats
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=liste-unites">
                        <i class="fa fa-angle-right"></i> Unités
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=liste-mps">
                        <i class="fa fa-angle-right"></i> Matières premières
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=liste-specialites">
                        <i class="fa fa-angle-right"></i> Spécialités
                    </a>
                </li>
                <li>
                    <a href="<?php echo $baseUrl ?>/back/views/pages/templates/template.php?page=liste-categories">
                        <i class="fa fa-angle-right"></i> Catégories
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-divider"></li>
    </ul>
    <!-- /#menu -->
</div>
<!-- /#left -->
