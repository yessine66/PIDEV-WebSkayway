<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=50, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r", type="string", length=50, nullable=false)
     */
    private $textR;

    /**
     * @var string
     *
     * @ORM\Column(name="date_envoi", type="string", length=50, nullable=false)
     */
    private $dateEnvoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cours", type="string", length=50, nullable=true)
     */
    private $cours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enseignant", type="string", length=50, nullable=true)
     */
    private $enseignant;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
