<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 19:26
 */

session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] != null)
    header("Location: views/pages/templates/template.php?page=dashboard");
else
    header("Location: views/pages/login.php");
?>

