<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 16:42
 */

namespace utils;


use dao\AdminDao;

class Login
{
    private $identifiant;
    private $pass;

    /**
     * @return \model\Admin|null
     * @throws \Exception
     */
    public function login() {
        $adminDao = new AdminDao();
        $admin = $adminDao->findByLogin($this->identifiant, sha1($this->pass));
        if ($admin == null)
            throw new \Exception("Les informations sont incorrectes, veuillez recommencer");
        return $admin;
    }

    /**
     * Login constructor.
     * @param string $identifiant
     * @param string $pass
     */
    public function __construct($identifiant = "", $pass = "")
    {
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
            throw new \Exception("Identifiant vide");
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
        if (empty($pass))
            throw new \Exception("Mot de passe vide");
        $this->pass = $pass;
    }
}