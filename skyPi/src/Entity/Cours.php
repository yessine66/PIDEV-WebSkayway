<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id_t", columns={"id_t"}), @ORM\Index(name="id", columns={"id"})})
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
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=100, nullable=false)
     */
    private $nomC;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=500, nullable=false)
     */
    private $pdf;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbparticipant", type="integer", nullable=true)
     */
    private $nbparticipant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_t", type="integer", nullable=true)
     */
    private $idT;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @return int
     */
    public function getIdC(): int
    {
        return $this->idC;
    }

    /**
     * @param int $idC
     */
    public function setIdC(int $idC): void
    {
        $this->idC = $idC;
    }

    /**
     * @return string
     */
    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    /**
     * @param string $nomC
     */
    public function setNomC(string $nomC): void
    {
        $this->nomC = $nomC;
    }

    /**
     * @return string
     */
    public function getPdf(): string
    {
        return $this->pdf;
    }

    /**
     * @param string $pdf
     */
    public function setPdf(string $pdf): void
    {
        $this->pdf = $pdf;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getNbparticipant(): ?int
    {
        return $this->nbparticipant;
    }

    /**
     * @param int|null $nbparticipant
     */
    public function setNbparticipant(?int $nbparticipant): void
    {
        $this->nbparticipant = $nbparticipant;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int|null
     */
    public function getIdT(): ?int
    {
        return $this->idT;
    }

    /**
     * @param int|null $idT
     */
    public function setIdT(?int $idT): void
    {
        $this->idT = $idT;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }


}
