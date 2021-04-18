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

    public function getIdT(): ?int
    {
        return $this->idT;
    }

    public function getNomT(): ?string
    {
        return $this->nomT;
    }

    public function setNomT(string $nomT): self
    {
        $this->nomT = $nomT;

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
