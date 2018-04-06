<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:41
 */

namespace dao;


class UtilDao
{
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "root";
    private static $db = "plats";

    /**
     * @param \mysqli_result $data
     * @param \mysqli $connection
     */
    public static function closeRessources(\mysqli_result $data, \mysqli $connection) {
        if ($data != null)
            $data->close();
        if ($connection != null)
            $connection->close();
    }

    /**
     * @return \mysqli
     */
    public static function getConnection() {
        return (new DBConnection(UtilDao::$host, UtilDao::$user, UtilDao::$pass, UtilDao::$db))->getConnection();
    }
}