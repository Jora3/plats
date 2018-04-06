<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:37
 */

namespace dao;


use model\Admin;
use model\Table;

class AdminDao implements InterfaceDao
{
    private $table = "admin";

    public function findByLogin($identifiant, $pass) {
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE identifiant = '$identifiant' AND pass = '$pass'";
            $data = $connection->query($sql);
            if ($row = $data->fetch_assoc())
                return new Admin($row['idAdmin'], $row['identifiant'], $row['pass']);
            return null;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
    }

    function findById(Table $table)
    {
        // TODO: Implement findById() method.
    }

    function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function save(Table $table)
    {
        // TODO: Implement save() method.
    }
}