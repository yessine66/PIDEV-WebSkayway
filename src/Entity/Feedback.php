<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idF;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=80, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=80, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=80, nullable=false)
     */
    private $avis;

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
