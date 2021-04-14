<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_t", columns={"id_t"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_c", type="string", length=100, nullable=true)
     */
    private $nomC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="duree", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="string", length=250, nullable=true)
     */
    private $contenu;

    /**
     * @var int
     *
     * @ORM\Column(name="id_t", type="integer", nullable=false)
     */
    private $idT;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    public function setNomC(?string $nomC): self
    {
        $this->nomC = $nomC;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(?\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdT(): ?int
    {
        return $this->idT;
    }

    public function setIdT(int $idT): self
    {
        $this->idT = $idT;

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
