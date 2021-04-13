<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
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
     * @var string|null
     *
     * @ORM\Column(name="text_r1", type="string", length=250, nullable=true)
     */
    private $textR1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r2", type="string", length=250, nullable=false)
     */
    private $textR2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r3", type="string", length=250, nullable=false)
     */
    private $textR3;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r4", type="string", length=250, nullable=false)
     */
    private $textR4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_q", type="integer", nullable=true)
     */
    private $idQ;

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
     * @return string|null
     */
    public function getTextR1(): ?string
    {
        return $this->textR1;
    }

    /**
     * @param string|null $textR1
     */
    public function setTextR1(?string $textR1): void
    {
        $this->textR1 = $textR1;
    }

    /**
     * @return string
     */
    public function getTextR2(): string
    {
        return $this->textR2;
    }

    /**
     * @param string $textR2
     */
    public function setTextR2(string $textR2): void
    {
        $this->textR2 = $textR2;
    }

    /**
     * @return string
     */
    public function getTextR3(): string
    {
        return $this->textR3;
    }

    /**
     * @param string $textR3
     */
    public function setTextR3(string $textR3): void
    {
        $this->textR3 = $textR3;
    }

    /**
     * @return string
     */
    public function getTextR4(): string
    {
        return $this->textR4;
    }

    /**
     * @param string $textR4
     */
    public function setTextR4(string $textR4): void
    {
        $this->textR4 = $textR4;
    }

    /**
     * @return int|null
     */
    public function getIdQ(): ?int
    {
        return $this->idQ;
    }

    /**
     * @param int|null $idQ
     */
    public function setIdQ(?int $idQ): void
    {
        $this->idQ = $idQ;
    }


}
