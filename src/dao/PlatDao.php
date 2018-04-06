<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 21:07
 */

namespace dao;


use model\Plat;
use model\Table;

class PlatDao implements InterfaceDao
{
    private $table = "plat";

    public function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE 1 < 2 AND " . $condition;
            $data = $connection->query($sql);
            $plats = array();
            while ($row = $data->fetch_assoc())
                array_push($plats, new Plat($row['idPlat'], $row['nomPlat'], $row['descriptionPlat'], $row['image'], $row['idCategorie'], $row['idSpecialite'], $row['indexPlat']));
            return $plats;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    public function findById(Table $table)
    {
        // TODO: Implement findById() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE idPlat = " . $table->getId();
            $data = $connection->query($sql);
            $row = $data->fetch_assoc();
            if ($row)
                return new Plat($row['idPlat'], $row['nomPlat'], $row['descriptionPlat'], $row['image'], $row['idCategorie'], $row['idSpecialite'], $row['indexPlat']);
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
            $plats = array();
            while ($row = $data->fetch_assoc())
                array_push($plats, new Plat($row['idPlat'], $row['nomPlat'], $row['descriptionPlat'], $row['image'], $row['idCategorie'], $row['idSpecialite'], $row['indexPlat']));
            return $plats;
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
            if ($table instanceof Plat) {
                $connection = UtilDao::getConnection();
                $sql = "INSERT INTO $this->table (nomPlat, descriptionPlat, image, idCategorie, idSpecialite, indexPlat) VALUES ('". $table->getNomPlat() ."', '". $table->getDescriptionPlat() ."', '". $table->getImage() ."', ". $table->getIdCategorie() .", ". $table->getIdSpecialite() .",'". $table->getIndexPlat() ."')";
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