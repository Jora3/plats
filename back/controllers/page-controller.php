<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 19:16
 */

session_start();
if (!isset($_SESSION['admin']))
    header("Location: http://localhost/my-apps/plats/back/views/pages/login.php");
