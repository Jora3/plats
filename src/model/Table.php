<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 19:49
 */

namespace model;


class Table
{
    private $id;

    /**
     * Table constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->setId($id);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @throws \Exception
     */
    public function setId($id)
    {
        if ($id > 0)
            $this->id = $id;
        else
            throw new \Exception("Id négatif : " . $id);
    }
}