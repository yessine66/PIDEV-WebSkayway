<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
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
     * @var string
     *
     * @ORM\Column(name="name_t", type="string", length=250, nullable=false)
     */
    private $nameT;

    /**
     * @return int
     */
    public function getIdTest(): int
    {
        return $this->idTest;
    }

    /**
     * @param int $idTest
     */
    public function setIdTest(int $idTest): void
    {
        $this->idTest = $idTest;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getDateTest(): ?string
    {
        return $this->dateTest;
    }

    /**
     * @param string|null $dateTest
     */
    public function setDateTest(?string $dateTest): void
    {
        $this->dateTest = $dateTest;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int|null $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getNameT(): string
    {
        return $this->nameT;
    }

    /**
     * @param string $nameT
     */
    public function setNameT(string $nameT): void
    {
        $this->nameT = $nameT;
    }


}
