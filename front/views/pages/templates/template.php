<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 18:02
 */

session_start();
require_once "require.php";

$baseUrl = "http://localhost/my-apps/plats";
$content = "../" . $page . ".php";

$categories = (new \utils\LoaderData("categorie"))->load();
$specialites = (new \utils\LoaderData("specialite"))->load();

?>
<!doctype html>
<html>
    <!-- head -->
    <?php require_once "head.php"; ?>

    <!-- body -->
    <body page="<?php echo $page ?>">
        <div class="main">
            <!-- header -->
            <?php require_once "header.php"; ?>

            <?php
                if ($page == "accueil") require_once "slide-accueil.php";
            ?>

            <div class="content page1">
                <div class="container_12">
                    <!-- content -->
                    <?php require_once($content); ?>

                    <!-- bottom -->
                    <?php require_once "bottom.php"; ?>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require_once "footer.php"; ?>

        <!-- js -->
        <?php require_once "js.php"; ?>
    </body>

    <script type="text/javascript">
        $(window).load(function () {
            var page = $('body').attr("page"),
                plat = $('#plat').attr("valeur"),
                post = "page="+page;
            if (plat !== undefined)
                post += "&plat="+plat;
            $.ajax({
                url: "http://localhost/my-apps/plats/front/controllers/title-controller.php",
                type: "post",
                data: post,
                dataType: "json",
                success: function (result) {
                    $('title').empty();
                    $('title').html(result.valeur);
                }
            });
        });
    </script>

</html>
