<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Enseignant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ens", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEns;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matiere", type="string", length=50, nullable=true)
     */
    private $matiere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bibliographie", type="text", length=65535, nullable=true)
     */
    private $bibliographie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specialite", type="string", length=250, nullable=true)
     */
    private $specialite;

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
