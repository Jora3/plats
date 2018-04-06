<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:04
 */

namespace model;


class Specialite extends Table
{
    private $nomSpecialite;
    private $descriptionSpecialite;

    /**
     * Specialite constructor.
     * @param $id
     * @param $nomSpecialite
     * @param $descriptionSpecialite
     */
    public function __construct($id, $nomSpecialite, $descriptionSpecialite)
    {
        parent::__construct($id);
        $this->setNomSpecialite($nomSpecialite);
        $this->setDescriptionSpecialite($descriptionSpecialite);
    }

    /**
     * @return mixed
     */
    public function getNomSpecialite()
    {
        return $this->nomSpecialite;
    }

    /**
     * @param mixed $nomSpecialite
     * @throws \Exception
     */
    public function setNomSpecialite($nomSpecialite)
    {
        if (empty($nomSpecialite))
            throw new \Exception("Nom de spécialité vide");
        $this->nomSpecialite = $nomSpecialite;
    }

    /**
     * @return mixed
     */
    public function getDescriptionSpecialite()
    {
        return $this->descriptionSpecialite;
    }

    /**
     * @param mixed $descriptionSpecialite
     */
    public function setDescriptionSpecialite($descriptionSpecialite)
    {
        $this->descriptionSpecialite = $descriptionSpecialite;
    }
}