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
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @param int $idEns
     */
    public function setIdEns(int $idEns): void
    {
        $this->idEns = $idEns;
    }

    public function getIdEns(): ?int
    {
        return $this->idEns;
    }

    public function getMatiere(): ?string
    {
        return $this->matiere;
    }

    public function setMatiere(?string $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getBibliographie(): ?string
    {
        return $this->bibliographie;
    }

    public function setBibliographie(?string $bibliographie): self
    {
        $this->bibliographie = $bibliographie;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;

        return $this;
    }


}
