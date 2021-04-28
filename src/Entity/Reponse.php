<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_q", columns={"id_q"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReponseRepository")
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_r", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idR;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r1", type="string", length=250, nullable=true)
     * @Assert\NotBlank
     */
    private $textR1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r2", type="string", length=250, nullable=false)
     * @Assert\NotBlank
     */
    private $textR2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r3", type="string", length=250, nullable=false)
     * @Assert\NotBlank
     */
    private $textR3;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r4", type="string", length=250, nullable=false)
     * @Assert\NotBlank
     */
    private $textR4;

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
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_q", referencedColumnName="id_q")
     * })
     */
    private $idQ;

    /**
     * Reponse constructor.
     * @param string $textR1
     * @param string $textR2
     * @param string $textR3
     * @param string $textR4
     * @param \Question $idQ
     */
    public function __construct(string $textR1, string $textR2, string $textR3, string $textR4, \Question $idQ)
    {
        $this->textR1 = $textR1;
        $this->textR2 = $textR2;
        $this->textR3 = $textR3;
        $this->textR4 = $textR4;
        $this->idQ = $idQ;
    }

    /**
     * @return int
     */
    public function getIdR(): int
    {
        return $this->idR;
    }

    /**
     * @param int $idR
     */
    public function setIdR(int $idR): void
    {
        $this->idR = $idR;
    }

    /**
     * @return string
     */
    public function getTextR1(): ?string
    {
        return $this->textR1;
    }

    /**
     * @param string $textR1
     */
    public function setTextR1(?string $textR1): void
    {
        $this->textR1 = $textR1;
    }

    /**
     * @return string
     */
    public function getTextR2(): ?string
    {
        return $this->textR2;
    }

    /**
     * @param string $textR2
     */
    public function setTextR2(?string $textR2): void
    {
        $this->textR2 = $textR2;
    }

    /**
     * @return string
     */
    public function getTextR3(): ?string
    {
        return $this->textR3;
    }

    /**
     * @param string $textR3
     */
    public function setTextR3(?string $textR3): void
    {
        $this->textR3 = $textR3;
    }

    /**
     * @return string
     */
    public function getTextR4(): ?string
    {
        return $this->textR4;
    }

    /**
     * @param string $textR4
     */
    public function setTextR4(?string $textR4): void
    {
        $this->textR4 = $textR4;
    }

    /**
     * @return int
     */
    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;
        return $this;

    }


    public function getIdQ(): ?Question
    {
        return $this->idQ;
    }


    public function setIdQ(?Question $idQ): self
    {
        $this->idQ = $idQ;
        return $this;
    }


}
