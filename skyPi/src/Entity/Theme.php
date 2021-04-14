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
     * @var string|null
     *
     * @ORM\Column(name="nom_t", type="string", length=100, nullable=true)
     */
    private $nomT;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    public function getIdT(): ?int
    {
        return $this->idT;
    }

    public function getNomT(): ?string
    {
        return $this->nomT;
    }

    public function setNomT(?string $nomT): self
    {
        $this->nomT = $nomT;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


}
