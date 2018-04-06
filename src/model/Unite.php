<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 15:22
 */

namespace model;


class Unite extends Table
{
    private $nomUnite;

    /**
     * Unite constructor.
     * @param $id
     * @param $nomUnite
     */
    public function __construct($id, $nomUnite)
    {
        parent::__construct($id);
        $this->setNomUnite($nomUnite);
    }

    /**
     * @return mixed
     */
    public function getNomUnite()
    {
        return $this->nomUnite;
    }

    /**
     * @param mixed $nomUnite
     * @throws \Exception
     */
    public function setNomUnite($nomUnite)
    {
        if (empty($nomUnite))
            throw new \Exception("Nom d'unité vide");
        $this->nomUnite = $nomUnite;
    }
}