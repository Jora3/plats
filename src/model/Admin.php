<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:33
 */

namespace model;


class Admin extends Table
{
    private $identifiant;
    private $pass;

    /**
     * Admin constructor.
     * @param $id
     * @param $identifiant
     * @param $pass
     */
    public function __construct($id, $identifiant, $pass)
    {
        parent::__construct($id);
        $this->setIdentifiant($identifiant);
        $this->setPass($pass);
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     * @throws \Exception
     */
    public function setIdentifiant($identifiant)
    {
        if (empty($identifiant))
            throw new \Exception("Identifiant d'administrateur vide");
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     * @throws \Exception
     */
    public function setPass($pass)
    {
        if (strlen($pass) != 40)
            throw new \Exception("Mot de passe non crypté");
        $this->pass = $pass;
    }
}