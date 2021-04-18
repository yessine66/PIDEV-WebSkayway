<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_p", columns={"id_p"})})
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
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Partenaire
     *
     * @ORM\ManyToOne(targetEntity="Partenaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_p", referencedColumnName="id_p")
     * })
     */
    private $idP;

    /**
     * @return int
     */
    public function getIdProm(): int
    {
        return $this->idProm;
    }

    /**
     * @param int $idProm
     */
    public function setIdProm(int $idProm): void
    {
        $this->idProm = $idProm;
    }

    /**
     * @return string|null
     */
    public function getCodeP(): ?string
    {
        return $this->codeP;
    }

    /**
     * @param string|null $codeP
     */
    public function setCodeP(?string $codeP): void
    {
        $this->codeP = $codeP;
    }

    /**
     * @return int|null
     */
    public function getReduction(): ?int
    {
        return $this->reduction;
    }

    /**
     * @param int|null $reduction
     */
    public function setReduction(?int $reduction): void
    {
        $this->reduction = $reduction;
    }

    /**
     * @return string|null
     */
    public function getDated(): ?string
    {
        return $this->dated;
    }

    /**
     * @param string|null $dated
     */
    public function setDated(?string $dated): void
    {
        $this->dated = $dated;
    }

    /**
     * @return string|null
     */
    public function getDatef(): ?string
    {
        return $this->datef;
    }

    /**
     * @param string|null $datef
     */
    public function setDatef(?string $datef): void
    {
        $this->datef = $datef;
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


    public function getIdP(): ?Partenaire
    {
        return $this->idP;
    }


    public function setIdP(?Partenaire $idP): self
    {
        $this->idP = $idP;
        return $this;

    }


}
