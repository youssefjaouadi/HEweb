<?php
namespace RestoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * Resto
 *
 * @ORM\Table(name="resto", uniqueConstraints={@ORM\UniqueConstraint(name="id_Place_Resto", columns={"id_Place_Resto"})})
 * @ORM\Entity
 *
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\RestoRepository")
 *
 */
class Resto extends BaseUser
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
     * @param string $ltdresto
     */
    public function setLtdresto($ltdresto)
    {
        $this->ltdresto = $ltdresto;
    }
    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $usernameCanonical;
    /**
     * @var string
     */
    protected $emailCanonical;
    /**
     * @var string
     *
     * @ORM\Column(name="id_Place_Resto", type="string", length=50, nullable=false)
     */
    protected $idPlaceResto;
    /**
     * @var string
     *
     * @ORM\Column(name="nomResto", type="string", length=50, nullable=false)
     */
    protected $nomresto;
    /**
     * @var string
     *
     * @ORM\Column(name="adresseResto", type="string", length=50, nullable=false)
     */
    protected $adresseresto;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    protected $description;
    /**
     * @var string
     *
     * @ORM\Column(name="ouverture", type="string", length=10, nullable=false)
     */
    protected $ouverture;
    /**
     * @var string
     *
     * @ORM\Column(name="fermeture", type="string", length=10, nullable=false)
     */
    protected $fermeture;
    /**
     * @var string
     *
     * @ORM\Column(name="typeResto", type="string", length=50, nullable=false)
     */
    protected $typeresto;
    /**
     * @var string
     *
     * @ORM\Column(name="RibResto", type="string", length=50, nullable=false)
     */
    protected $ribresto;
    /**
     * @var string
     *
     * @ORM\Column(name="lngResto", type="string", length=50, nullable=false)
     */
    protected $lngresto;
    /**
     * @var string
     *
     * @ORM\Column(name="ltdResto", type="string", nullable=false)
     */
    protected $ltdresto;
    /**
     * @var string
     *
     * @ORM\Column(name="telNum", type="string", nullable=false)
     */
    protected $tel;
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
     * @param string $ribresto
     * @param string $lngresto
     * @param string $ltdresto
     */
}