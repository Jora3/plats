<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 15:23
 */

namespace dao;


use model\Table;
use model\Unite;

class UniteDao implements InterfaceDao
{
    private $table = "unite";

    public function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
    }

    public function findById(Table $table)
    {
        // TODO: Implement findById() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE idUnite = " . $table->getId();
            $data = $connection->query($sql);
            if ($row = $data->fetch_assoc())
                return new Unite($row['idUnite'], $row['nomUnite']);
            return null;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table";
            $data = $connection->query($sql);
            $unites = array();
            while ($row = $data->fetch_assoc())
                array_push($unites, new Unite($row['idUnite'], $row['nomUnite']));
            return $unites;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    public function save(Table $table)
    {
        // TODO: Implement save() method.
        $connection = null;
        try {
            if ($table instanceof Unite) {
                $connection = UtilDao::getConnection();
                $sql = "INSERT INTO $this->table (nomUnite) VALUES ('". $table->getNomUnite() ."')";
                $connection->query($sql);
            }
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources(new \mysqli_result(), $connection);
        }
    }
}