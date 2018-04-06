<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 19:08
 */

session_start();
session_destroy();
header("Location: ../index.php");
?>