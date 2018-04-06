<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/04/2018
 * Time: 15:19
 */

namespace model;


use dao\UniteDao;

class MatierePremiere extends Table
{
    private $nomMatierePremiere;
    private $idUnite;

    /**
     * @return Unite|null
     */
    public function getUnite() {
        return (new UniteDao())->findById(new Table($this->idUnite));
    }

    /**
     * MatierePremiere constructor.
     * @param $id
     * @param $nomMatierePremiere
     * @param $idUnite
     */
    public function __construct($id, $nomMatierePremiere, $idUnite)
    {
        parent::__construct($id);
        $this->setNomMatierePremiere($nomMatierePremiere);
        $this->setIdUnite($idUnite);
    }

    /**
     * @return mixed
     */
    public function getNomMatierePremiere()
    {
        return $this->nomMatierePremiere;
    }

    /**
     * @param mixed $nomMatierePremiere
     * @throws \Exception
     */
    public function setNomMatierePremiere($nomMatierePremiere)
    {
        if (empty($nomMatierePremiere))
            throw new \Exception("Nom de la matière première vide");
        $this->nomMatierePremiere = $nomMatierePremiere;
    }

    /**
     * @return mixed
     */
    public function getIdUnite()
    {
        return $this->idUnite;
    }

    /**
     * @param mixed $idUnite
     * @throws \Exception
     */
    public function setIdUnite($idUnite)
    {
        if ($idUnite <= 0)
            throw new \Exception("Id Unité négatif : " . $idUnite);
        $this->idUnite = $idUnite;
    }
}