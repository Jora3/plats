<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:28
 */

namespace dao;


use model\Table;

interface InterfaceDao
{
    public function save(Table $table);
    public function findWithCondition($condition);
    public function findById(Table $table);
    public function findAll();
}