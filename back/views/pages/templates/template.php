<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 15:48
 */

require_once "../../../controllers/page-controller.php";

require_once "require.php";

$baseUrl = "http://localhost/my-apps/plats";
$page = $_GET['page'];
$content = "../" . $page . ".php";
?>
<!doctype html>
<html>
    <!-- head -->
    <?php require_once "head.php"; ?>

    <body>
        <div class="bg-dark dk" id="wrap">
            <!-- top -->
            <?php require_once "top.php"; ?>

            <!-- left -->
            <?php require_once "left.php"; ?>

            <div id="content">
                <div class="outer">
                    <div class="inner bg-light lter">
                        <div class="col-lg-12">
                            <?php require_once($content) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require_once "footer.php"; ?>

        <!-- script -->
        <?php require_once "script.php"; ?>
    </body>
</html>

