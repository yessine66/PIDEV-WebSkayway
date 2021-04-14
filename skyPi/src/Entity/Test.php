<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_c", columns={"id_c"})})
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
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_test", type="date", nullable=true)
     */
    private $dateTest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     */
    private $idC;

    public function getIdTest(): ?int
    {
        return $this->idTest;
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

    public function getDateTest(): ?\DateTimeInterface
    {
        return $this->dateTest;
    }

    public function setDateTest(?\DateTimeInterface $dateTest): self
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

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    public function setIdC(int $idC): self
    {
        $this->idC = $idC;

        return $this;
    }


}
