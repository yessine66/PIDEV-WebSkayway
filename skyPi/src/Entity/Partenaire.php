<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Partenaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_p", type="string", length=100, nullable=true)
     */
    private $nomP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domaine", type="string", length=50, nullable=true)
     */
    private $domaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_p", type="string", length=40, nullable=true)
     */
    private $dateP;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(?string $nomP): self
    {
        $this->nomP = $nomP;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(?string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getDateP(): ?string
    {
        return $this->dateP;
    }

    public function setDateP(?string $dateP): self
    {
        $this->dateP = $dateP;

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
