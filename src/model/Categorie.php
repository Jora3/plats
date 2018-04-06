<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:01
 */

namespace model;


class Categorie extends Table
{
    private $nomCategorie;
    private $descriptionCategorie;

    /**
     * Categorie constructor.
     * @param $id
     * @param $nomCategorie
     * @param $descriptionCategorie
     */
    public function __construct($id, $nomCategorie, $descriptionCategorie)
    {
        parent::__construct($id);
        $this->setNomCategorie($nomCategorie);
        $this->setDescriptionCategorie($descriptionCategorie);
    }

    /**
     * @return mixed
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * @param mixed $nomCategorie
     * @throws \Exception
     */
    public function setNomCategorie($nomCategorie)
    {
        if (empty($nomCategorie))
            throw new \Exception("Nom de catégorie vide");
        $this->nomCategorie = $nomCategorie;
    }

    /**
     * @return mixed
     */
    public function getDescriptionCategorie()
    {
        return $this->descriptionCategorie;
    }

    /**
     * @param mixed $descriptionCategorie
     */
    public function setDescriptionCategorie($descriptionCategorie)
    {
        $this->descriptionCategorie = $descriptionCategorie;
    }
}