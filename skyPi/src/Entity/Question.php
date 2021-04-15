<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_q", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_q", type="string", length=250, nullable=true)
     */
    private $textQ;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_point", type="integer", nullable=true)
     */
    private $nbrPoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_t", type="string", length=100, nullable=false)
     */
    private $nameT;

    /**
     * @return int
     */
    public function getIdQ(): int
    {
        return $this->idQ;
    }

    /**
     * @param int $idQ
     */
    public function setIdQ(int $idQ): void
    {
        $this->idQ = $idQ;
    }

    /**
     * @return string|null
     */
    public function getTextQ(): ?string
    {
        return $this->textQ;
    }

    /**
     * @param string|null $textQ
     */
    public function setTextQ(?string $textQ): void
    {
        $this->textQ = $textQ;
    }

    /**
     * @return int|null
     */
    public function getNbrPoint(): ?int
    {
        return $this->nbrPoint;
    }

    /**
     * @param int|null $nbrPoint
     */
    public function setNbrPoint(?int $nbrPoint): void
    {
        $this->nbrPoint = $nbrPoint;
    }

    /**
     * @return string|null
     */
    public function getNameT(): ?string
    {
        return $this->nameT;
    }

    /**
     * @param string|null $nameT
     */
    public function setNameT(?string $nameT): void
    {
        $this->nameT = $nameT;
    }


}
