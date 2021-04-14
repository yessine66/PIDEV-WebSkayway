<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant", indexes={@ORM\Index(name="FK_Utilisateur_Enseignant", columns={"id"})})
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
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }


}
