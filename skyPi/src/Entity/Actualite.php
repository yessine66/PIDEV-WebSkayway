<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="id_ev", columns={"id_ev"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ac", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_ac", type="string", length=100, nullable=true)
     */
    private $titreAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ev", type="integer", nullable=false)
     */
    private $idEv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_ajout", type="string", length=255, nullable=true)
     */
    private $dateAjout;


}