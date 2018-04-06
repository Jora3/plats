<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 11:42
 */

namespace model;


class Ingredient extends Table
{
    private $idMatierePremiere;
    private $qte;
    private $idPlat;

    /**
     * Ingredient constructor.
     * @param $id
     * @param $idMatierePremiere
     * @param $qte
     * @param $idPlat
     */
    public function __construct($id, $idMatierePremiere, $qte, $idPlat)
    {
        parent::__construct($id);
        $this->setIdMatierePremiere($idMatierePremiere);
        $this->setQte($qte);
        $this->setIdPlat($idPlat);
    }

    /**
     * @return mixed
     */
    public function getIdMatierePremiere()
    {
        return $this->idMatierePremiere;
    }

    /**
     * @param mixed $idMatierePremiere
     * @throws \Exception
     */
    public function setIdMatierePremiere($idMatierePremiere)
    {
        if ($idMatierePremiere <= 0)
            throw new \Exception("Id Matière première négatif : " . $idMatierePremiere);
        $this->idMatierePremiere = $idMatierePremiere;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     * @throws \Exception
     */
    public function setQte($qte)
    {
        if ($qte <= 0)
            throw new \Exception("Qté negative ou nulle : " . $qte);
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getIdPlat()
    {
        return $this->idPlat;
    }

    /**
     * @param mixed $idPlat
     * @throws \Exception
     */
    public function setIdPlat($idPlat)
    {
        if ($idPlat <= 0)
            throw new \Exception("Id Plat négatif : " . $idPlat);
        $this->idPlat = $idPlat;
    }
}