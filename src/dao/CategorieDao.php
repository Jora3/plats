<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:31
 */

namespace dao;


use model\Categorie;
use model\Table;

class CategorieDao implements InterfaceDao
{
    private $table = "categorie";

    function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
    }

    function findById(Table $table)
    {
        // TODO: Implement findById() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE idCategorie = " . $table->getId();
            $data = $connection->query($sql);
            if ($row = $data->fetch_assoc())
                return new Categorie($row['idCategorie'], $row['nomCategorie'], $row['descriptionCategorie']);
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
            $categories = array();
            while ($row = $data->fetch_assoc())
                array_push($categories, new Categorie($row['idCategorie'], $row['nomCategorie'], $row['descriptionCategorie']));
            return $categories;
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
            if ($table instanceof Categorie) {
                $connection = UtilDao::getConnection();
                $sql = "INSERT INTO $this->table (nomCategorie, descriptionCategorie) VALUES ('". $table->getNomCategorie() ."', '". str_replace("'", "\'", $table->getDescriptionCategorie()) ."')";
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