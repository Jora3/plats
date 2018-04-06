<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/04/2018
 * Time: 19:47
 */

namespace utils;


use dao\AdminDao;

class LoaderData
{
    private $class;

    public function load() {
        return (new $this->class())->findAll();
    }

    /**
     * LoaderData constructor.
     * @param $class
     */
    public function __construct($class)
    {
        $this->setClass($class);
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     * @throws \Exception
     */
    public function setClass($class)
    {
        if (empty($class))
            throw new \Exception("Classe vide");
        $this->class = "dao\\" . ucfirst($class) . "Dao";
    }
}