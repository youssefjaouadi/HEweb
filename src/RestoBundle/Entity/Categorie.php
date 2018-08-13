<?php
namespace RestoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;
    /**
     * @var string
     *
     * @ORM\Column(name="nom_cat", type="string", length=50, nullable=false)
     */
    private $nomCat;
    /**
     * @var string
        *
     * @ORM\Column(name="img_cat", type="string", length=200, nullable=false)
     */

    private $imgCat;
    /**
     * @var \Resto
     *
     * @ORM\ManyToOne(targetEntity="Resto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idresto", referencedColumnName="id")
     * })
     */
    private $idresto;

    /**
     * Categorie constructor.
     * @param int $idCat
     * @param string $nomCat
     * @param string $imgCat
     * @param \Resto $idresto
     */
    public function __construct($idCat, $nomCat, $imgCat, \Resto $idresto)
    {
        $this->idCat = $idCat;
        $this->nomCat = $nomCat;
        $this->imgCat = $imgCat;
        $this->idresto = $idresto;
    }

    /**
     * @return \Resto
     */
    public function getIdresto()
    {
        return $this->idresto;
    }

    /**
     * @param \Resto $idresto
     */
    public function setIdresto($idresto)
    {
        $this->idresto = $idresto;
    }


    /**
     * @return int
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * @param int $idCat
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;
    }

    /**
     * @return string
     */
    public function getNomCat()
    {
        return $this->nomCat;
    }

    /**
     * @param string $nomCat
     */
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;
    }

    /**
     * @return string
     */
    public function getImgCat()
    {
        return $this->imgCat;
    }

    /**
     * @param string $imgCat
     */
    public function setImgCat($imgCat)
    {
        $this->imgCat = $imgCat;
    }

}