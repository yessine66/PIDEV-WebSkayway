<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id_t", columns={"id_t"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=100, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=500, nullable=false)
     */
    private $pdf;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbparticipant", type="integer", nullable=true)
     */
    private $nbparticipant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_t", type="integer", nullable=true)
     */
    private $idT;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;


}
