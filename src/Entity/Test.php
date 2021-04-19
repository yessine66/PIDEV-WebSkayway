<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="id_c", columns={"id_c"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_test", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_test", type="string", length=250, nullable=true)
     */
    private $dateTest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var \Certificat
     *
     * @ORM\ManyToOne(targetEntity="Certificat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_c", referencedColumnName="id_certif")
     * })
     */
    private $idC;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getIdTest(): ?int
    {
        return $this->idTest;
    }

    public function getDateTest(): ?string
    {
        return $this->dateTest;
    }

    public function setDateTest(?string $dateTest): self
    {
        $this->dateTest = $dateTest;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getIdC(): ?Certificat
    {
        return $this->idC;
    }

    public function setIdC(?Certificat $idC): self
    {
        $this->idC = $idC;

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
