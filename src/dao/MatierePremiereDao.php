<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 15:29
 */

namespace dao;


use model\MatierePremiere;
use model\Table;

class MatierePremiereDao implements InterfaceDao
{
    private $table = "matiere_premiere";

    function findWithCondition($condition)
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
            $sql = "SELECT * FROM $this->table WHERE idMatierePremiere = " . $table->getId();
            $data = $connection->query($sql);
            if ($row = $data->fetch_assoc())
                return new MatierePremiere($row['idMatierePremiere'], $row['nomMatierePremiere'], $row['idUnite']);
            return null;
        }
        catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
        finally {
            UtilDao::closeRessources($data, $connection);
        }
    }

    function findAll()
    {
        // TODO: Implement findAll() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table";
            $data = $connection->query($sql);
            $mps = array();
            while ($row = $data->fetch_assoc())
                array_push($mps, new MatierePremiere($row['idMatierePremiere'], $row['nomMatierePremiere'], $row['idUnite']));
            return $mps;
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
            if ($table instanceof MatierePremiere) {
                $connection = UtilDao::getConnection();
                $sql = "INSERT INTO $this->table (nomMatierePremiere, idUnite) VALUES ('". $table->getNomMatierePremiere() ."', ". $table->getIdUnite() .")";
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