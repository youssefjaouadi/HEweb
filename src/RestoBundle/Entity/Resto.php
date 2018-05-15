<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resto
 *
 * @ORM\Table(name="resto", uniqueConstraints={@ORM\UniqueConstraint(name="id_Place_Resto", columns={"id_Place_Resto"})})
 * @ORM\Entity
 */
class Resto
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdPlaceResto()
    {
        return $this->idPlaceResto;
    }

    /**
     * @param string $idPlaceResto
     */
    public function setIdPlaceResto($idPlaceResto)
    {
        $this->idPlaceResto = $idPlaceResto;
    }

    /**
     * @return string
     */
    public function getNomresto()
    {
        return $this->nomresto;
    }

    /**
     * @param string $nomresto
     */
    public function setNomresto($nomresto)
    {
        $this->nomresto = $nomresto;
    }

    /**
     * @return string
     */
    public function getAdresseresto()
    {
        return $this->adresseresto;
    }

    /**
     * @param string $adresseresto
     */
    public function setAdresseresto($adresseresto)
    {
        $this->adresseresto = $adresseresto;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getOuverture()
    {
        return $this->ouverture;
    }

    /**
     * @param string $ouverture
     */
    public function setOuverture($ouverture)
    {
        $this->ouverture = $ouverture;
    }

    /**
     * @return string
     */
    public function getFermeture()
    {
        return $this->fermeture;
    }

    /**
     * @param string $fermeture
     */
    public function setFermeture($fermeture)
    {
        $this->fermeture = $fermeture;
    }

    /**
     * @return string
     */
    public function getTyperesto()
    {
        return $this->typeresto;
    }

    /**
     * @param string $typeresto
     */
    public function setTyperesto($typeresto)
    {
        $this->typeresto = $typeresto;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMdpresto()
    {
        return $this->mdpresto;
    }

    /**
     * @param string $mdpresto
     */
    public function setMdpresto($mdpresto)
    {
        $this->mdpresto = $mdpresto;
    }

    /**
     * @return string
     */
    public function getRibresto()
    {
        return $this->ribresto;
    }

    /**
     * @param string $ribresto
     */
    public function setRibresto($ribresto)
    {
        $this->ribresto = $ribresto;
    }

    /**
     * @return string
     */
    public function getLngresto()
    {
        return $this->lngresto;
    }

    /**
     * @param string $lngresto
     */
    public function setLngresto($lngresto)
    {
        $this->lngresto = $lngresto;
    }

    /**
     * @return int
     */
    public function getLtdresto()
    {
        return $this->ltdresto;
    }

    /**
     * @param int $ltdresto
     */
    public function setLtdresto($ltdresto)
    {
        $this->ltdresto = $ltdresto;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_Place_Resto", type="string", length=50, nullable=false)
     */
    private $idPlaceResto;

    /**
     * @var string
     *
     * @ORM\Column(name="nomResto", type="string", length=50, nullable=false)
     */
    private $nomresto;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseResto", type="string", length=50, nullable=false)
     */
    private $adresseresto;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ouverture", type="string", length=10, nullable=false)
     */
    private $ouverture;

    /**
     * @var string
     *
     * @ORM\Column(name="fermeture", type="string", length=10, nullable=false)
     */
    private $fermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="typeResto", type="string", length=50, nullable=false)
     */
    private $typeresto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpResto", type="string", length=50, nullable=false)
     */
    private $mdpresto;

    /**
     * @var string
     *
     * @ORM\Column(name="RibResto", type="string", length=50, nullable=false)
     */
    private $ribresto;

    /**
     * @var string
     *
     * @ORM\Column(name="lngResto", type="string", length=50, nullable=false)
     */
    private $lngresto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ltdResto", type="integer", nullable=false)
     */
    private $ltdresto;

    /**
     * Resto constructor.
     * @param int $id
     * @param string $idPlaceResto
     * @param string $nomresto
     * @param string $adresseresto
     * @param string $description
     * @param string $ouverture
     * @param string $fermeture
     * @param string $typeresto
     * @param string $email
     * @param string $mdpresto
     * @param string $ribresto
     * @param string $lngresto
     * @param int $ltdresto
     */
    public function __construct( $idPlaceResto, $nomresto, $adresseresto, $description, $ouverture, $fermeture, $typeresto, $email, $mdpresto, $ribresto, $lngresto, $ltdresto)
    {

        $this->idPlaceResto = $idPlaceResto;
        $this->nomresto = $nomresto;
        $this->adresseresto = $adresseresto;
        $this->description = $description;
        $this->ouverture = $ouverture;
        $this->fermeture = $fermeture;
        $this->typeresto = $typeresto;
        $this->email = $email;
        $this->mdpresto = $mdpresto;
        $this->ribresto = $ribresto;
        $this->lngresto = $lngresto;
        $this->ltdresto = $ltdresto;
    }


}

