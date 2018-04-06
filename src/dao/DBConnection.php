<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:32
 */

namespace dao;


class DBConnection
{
    private $host;
    private $user;
    private $pass;
    private $db;

    /**
     * DBConnection constructor.
     * @param $host
     * @param $user
     * @param $pass
     * @param $db
     */
    public function __construct($host, $user, $pass, $db)
    {
        $this->setHost($host);
        $this->setUser($user);
        $this->setPass($pass);
        $this->setDb($db);
    }

    /**
     * @return \mysqli
     */
    public function getConnection() {
        return new \mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     * @throws \Exception
     */
    public function setHost($host)
    {
        if (empty($host))
            throw new \Exception("Nom d'hôte vide");
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     * @throws \Exception
     */
    public function setDb($db)
    {
        if (empty($db))
            throw new \Exception("Nom de la base de donnée vide");
        $this->db = $db;
    }
}