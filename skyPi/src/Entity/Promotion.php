<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="FK_nomPartProm", columns={"nom_p"}), @ORM\Index(name="id_p", columns={"id_p"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_prom", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_p", type="string", length=50, nullable=true)
     */
    private $codeP;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reduction", type="integer", nullable=true)
     */
    private $reduction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateD", type="string", length=40, nullable=true)
     */
    private $dated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateF", type="string", length=40, nullable=true)
     */
    private $datef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_p", type="integer", nullable=true)
     */
    private $idP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_p", type="string", length=100, nullable=true)
     */
    private $nomP;

    public function getIdProm(): ?int
    {
        return $this->idProm;
    }

    public function getCodeP(): ?string
    {
        return $this->codeP;
    }

    public function setCodeP(?string $codeP): self
    {
        $this->codeP = $codeP;

        return $this;
    }

    public function getReduction(): ?int
    {
        return $this->reduction;
    }

    public function setReduction(?int $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getDated(): ?string
    {
        return $this->dated;
    }

    public function setDated(?string $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDatef(): ?string
    {
        return $this->datef;
    }

    public function setDatef(?string $datef): self
    {
        $this->datef = $datef;

        return $this;
    }

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function setIdP(?int $idP): self
    {
        $this->idP = $idP;

        return $this;
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


}
