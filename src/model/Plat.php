<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/03/2018
 * Time: 20:19
 */

namespace model;


use dao\CategorieDao;
use dao\SpecialiteDao;

class Plat extends Table
{
    private $nomPlat;
    private $descriptionPlat;
    private $image;
    private $idCategorie;
    private $idSpecialite;
    private $indexPlat;

    /**
     * @return Specialite|null
     */
    public function getSpecialite() {
        return (new SpecialiteDao())->findById(new Table($this->idSpecialite));
    }

    /**
     * @return Categorie|null
     */
    public function getCategorie() {
        return (new CategorieDao())->findById(new Table($this->idCategorie));
    }

    /**
     * Plat constructor.
     * @param $id
     * @param $nomPlat
     * @param $descriptionPlat
     * @param $image
     * @param $idCategorie
     * @param $idSpecialite
     * @param $indexPlat
     */
    public function __construct($id, $nomPlat, $descriptionPlat, $image, $idCategorie, $idSpecialite, $indexPlat)
    {
        parent::__construct($id);
        $this->setNomPlat($nomPlat);
        $this->setDescriptionPlat($descriptionPlat);
        $this->setImage($image);
        $this->setIdCategorie($idCategorie);
        $this->setIdSpecialite($idSpecialite);
        $this->setIndexPlat($this->indexer($indexPlat));
    }

    /**
     * @param $indexPlat
     * @return string
     */
    private function indexer($indexPlat) {
        if (empty($indexPlat))
            return $this->getId() . "" . $this->nomPlat . "" . $this->descriptionPlat . "" . $this->idCategorie . "" . $this->idSpecialite;
        return $indexPlat;
    }

    /**
     * @return mixed
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * @param mixed $nomPlat
     * @throws \Exception
     */
    public function setNomPlat($nomPlat)
    {
        if (empty($nomPlat))
            throw new \Exception("Nom de plat vide");
        $this->nomPlat = $nomPlat;
    }

    /**
     * @return mixed
     */
    public function getDescriptionPlat()
    {
        return $this->descriptionPlat;
    }

    /**
     * @param mixed $descriptionPlat
     * @throws \Exception
     */
    public function setDescriptionPlat($descriptionPlat)
    {
        if (empty($descriptionPlat))
            throw new \Exception("Description de plat vide");
        $this->descriptionPlat = $descriptionPlat;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @throws \Exception
     */
    public function setImage($image)
    {
        if (empty($image))
            throw new \Exception("Image vide");
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param mixed $idCategorie
     * @throws \Exception
     */
    public function setIdCategorie($idCategorie)
    {
        if ($idCategorie <= 0)
            throw new \Exception("Id catégorie négatif : " . $idCategorie);
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return mixed
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * @param mixed $idSpecialite
     * @throws \Exception
     */
    public function setIdSpecialite($idSpecialite)
    {
        if ($idSpecialite <= 0)
            throw new \Exception("Id spécialité négatif : " . $idSpecialite);
        $this->idSpecialite = $idSpecialite;
    }

    /**
     * @return mixed
     */
    public function getIndexPlat()
    {
        return $this->indexPlat;
    }

    /**
     * @param mixed $indexPlat
     */
    public function setIndexPlat($indexPlat)
    {
        $this->indexPlat = $indexPlat;
    }
}