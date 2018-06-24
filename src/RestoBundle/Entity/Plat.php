<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cat", referencedColumnName="id_cat")
     * })
     */
    private $idCat;


}

