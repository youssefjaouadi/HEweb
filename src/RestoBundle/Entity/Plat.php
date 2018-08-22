<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Plat
 *
 * @ORM\Table(name="plat", indexes={@ORM\Index(name="id_cat", columns={"id_cat"})})
 * @ORM\Entity
 */
class Plat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_plat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_plat", type="string", length=50, nullable=false)
     */
    private $nomPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_plat", type="string", length=50, nullable=false)
     */
    private $prixPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="description_plat", type="string", length=100, nullable=false)
     */
    private $descriptionPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="imageplat", type="string", length=300, nullable=false)
     */
    private $imageplat;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat", referencedColumnName="id_cat")
     * })
     */
    private $idCat;

    /**
     * @return int
     */
    public function getIdPlat()
    {
        return $this->idPlat;
    }

    /**
     * @param int $idPlat
     */
    public function setIdPlat($idPlat)
    {
        $this->idPlat = $idPlat;
    }

    /**
     * @return string
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * @param string $nomPlat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;
    }

    /**
     * @return string
     */
    public function getImageplat()
    {
        return $this->imageplat;
    }

    /**
     * @param string $imageplat
     */
    public function setImageplat($imageplat)
    {
        $this->imageplat = $imageplat;
    }

    /**
     * @return string
     */
    public function getPrixPlat()
    {
        return $this->prixPlat;
    }

    /**
     * @param string $prixPlat
     */
    public function setPrixPlat($prixPlat)
    {
        $this->prixPlat = $prixPlat;
    }

    /**
     * @return string
     */
    public function getDescriptionPlat()
    {
        return $this->descriptionPlat;
    }

    /**
     * @param string $descriptionPlat
     */
    public function setDescriptionPlat($descriptionPlat)
    {
        $this->descriptionPlat = $descriptionPlat;
    }

    /**
     * @return \Categorie
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * @param \Categorie $idCat
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }



    /**
     * @Assert\File(maxSize="5000k")
     */
    public $file;

    public function getWebPath()
    {

        return null ===$this->imageplat?null:$this->getUploadDir().'/'.$this->imageplat;
    }
    public function getUploadRootDir()
    {
        return __DIR__.'/../../../web/../../'.$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        return 'imgjdid';
    }
    public function uploadProfilPicture()
    {
        if($this->file != null && $this->file != "")
        {$this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
            $this->imageplat=$this->file->getClientOriginalName();

            $this->file=null;}

    }



}

