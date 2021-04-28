<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="id_c", columns={"id_c"}), @ORM\Index(name="id_q", columns={"id_q"}), @ORM\Index(name="id_r", columns={"id_r"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
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
     * @return \DateTime|null
     */
    public function getDateTest(): ?\DateTime
    {
        return $this->dateTest;
    }

    /**
     * @param \DateTime|null $dateTest
     */
    public function setDateTest(?\DateTime $dateTest): void
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
     * @return \Certificat
     */
    public function getIdC(): \Certificat
    {
        return $this->idC;
    }

    /**
     * @param \Certificat $idC
     */
    public function setIdC(\Certificat $idC): void
    {
        $this->idC = $idC;
    }

    /**
     * @return \Utilisateur
     */
    public function getId(): \Utilisateur
    {
        return $this->id;
    }

    /**
     * @param \Utilisateur $id
     */
    public function setId(\Utilisateur $id): void
    {
        $this->id = $id;
    }


    /**
     * Test constructor.
     */
    public function __construct()
    {
    }
    public function serialize()
    {
        return serialize([
            $this->id,

        ]);
    }



}
