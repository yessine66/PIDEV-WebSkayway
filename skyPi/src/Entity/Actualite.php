<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="id", columns={"id"})})
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
     * @ORM\Column(name="desc", type="string", length=250, nullable=true)
     */
    private $desc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    public function getIdAc(): ?int
    {
        return $this->idAc;
    }

    public function getTitreAc(): ?string
    {
        return $this->titreAc;
    }

    public function setTitreAc(?string $titreAc): self
    {
        $this->titreAc = $titreAc;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

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
