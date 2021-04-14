<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id_ac", columns={"id_ac"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ev", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_ev", type="string", length=100, nullable=true)
     */
    private $nomEv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ev", type="datetime", nullable=true)
     */
    private $dateEv;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ac", type="integer", nullable=false)
     */
    private $idAc;

    public function getIdEv(): ?int
    {
        return $this->idEv;
    }

    public function getNomEv(): ?string
    {
        return $this->nomEv;
    }

    public function setNomEv(?string $nomEv): self
    {
        $this->nomEv = $nomEv;

        return $this;
    }

    public function getDateEv(): ?\DateTimeInterface
    {
        return $this->dateEv;
    }

    public function setDateEv(?\DateTimeInterface $dateEv): self
    {
        $this->dateEv = $dateEv;

        return $this;
    }

    public function getIdAc(): ?int
    {
        return $this->idAc;
    }

    public function setIdAc(int $idAc): self
    {
        $this->idAc = $idAc;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdEv(): int
    {
        return $this->idEv;
    }

    /**
     * @param int $idEv
     */
    public function setIdEv(int $idEv): void
    {
        $this->idEv = $idEv;
    }

    /**
     * @return string|null
     */
    public function getNomEv(): ?string
    {
        return $this->nomEv;
    }

    /**
     * @param string|null $nomEv
     */
    public function setNomEv(?string $nomEv): void
    {
        $this->nomEv = $nomEv;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateEv(): ?\DateTime
    {
        return $this->dateEv;
    }

    /**
     * @param \DateTime|null $dateEv
     */
    public function setDateEv(?\DateTime $dateEv): void
    {
        $this->dateEv = $dateEv;
    }

    /**
     * @return string|null
     */
    public function getEspace(): ?string
    {
        return $this->espace;
    }

    /**
     * @param string|null $espace
     */
    public function setEspace(?string $espace): void
    {
        $this->espace = $espace;
    }

    /**
     * @return int|null
     */
    public function getNombrePl(): ?int
    {
        return $this->nombrePl;
    }

    /**
     * @param int|null $nombrePl
     */
    public function setNombrePl(?int $nombrePl): void
    {
        $this->nombrePl = $nombrePl;
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
