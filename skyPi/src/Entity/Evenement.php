<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ev", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_ev", type="string", length=100, nullable=true)
     */
    private $nomEv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ev", type="datetime", nullable=true)
     */
    private $dateEv;

    /**
     * @var string
     *
     * @ORM\Column(name="espace", type="string", length=255, nullable=false)
     */
    private $espace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_pl", type="integer", nullable=true)
     */
    private $nombrePl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;


}
