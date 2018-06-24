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


}

