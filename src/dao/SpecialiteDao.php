<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 21:04
 */

namespace dao;


use model\Specialite;
use model\Table;

class SpecialiteDao implements InterfaceDao
{
    private $table = "specialite";

    function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE 1 < 2 AND " . $condition;
            $data = $connection->query($sql);
            $specialites = array();
            while ($row = $data->fetch_assoc())
                array_push($specialites, new Specialite($row['idSpecialite'], $row['nomSpecialite'], $row['descriptionSpecialite']));
            return $specialites;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    function findById(Table $table)
    {
        // TODO: Implement findById() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE idSpecialite = " . $table->getId();
            $data = $connection->query($sql);
            if ($row = $data->fetch_assoc())
                return new Specialite($row['idSpecialite'], $row['nomSpecialite'], $row['descriptionSpecialite']);
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
            $specialites = array();
            while ($row = $data->fetch_assoc())
                array_push($specialites, new Specialite($row['idSpecialite'], $row['nomSpecialite'], $row['descriptionSpecialite']));
            return $specialites;
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
            if ($table instanceof Specialite) {
                $connection = UtilDao::getConnection();
                $sql = "INSERT INTO $this->table (nomSpecialite, descriptionSpecialite) VALUES ('". $table->getNomSpecialite() ."', '". str_replace("'", "\'", $table->getDescriptionSpecialite()) ."')";
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