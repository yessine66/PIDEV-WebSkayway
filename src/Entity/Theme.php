<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Theme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_t", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idT;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_t", type="string", length=100, nullable=false)
     */
    private $nomT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

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
