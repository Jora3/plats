<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 11:46
 */

namespace dao;


use model\Ingredient;
use model\Table;

class IngredientDao implements InterfaceDao
{
    private $table = "ingredient";

    public function findWithCondition($condition)
    {
        // TODO: Implement findWithCondition() method.
        $connection = null;
        $data = null;
        try {
            $connection = UtilDao::getConnection();
            $sql = "SELECT * FROM $this->table WHERE 1 < 2 AND " . $condition;
            $data = $connection->query($sql);
            $ingredients = array();
            while ($row = $data->fetch_assoc())
                array_push($ingredients, new Ingredient($row['idIngredient'], $row['idMatierePremiere'], $row['qte'], $row['idPlat']));
            return $ingredients;
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