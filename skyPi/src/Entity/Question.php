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

    public function getIdQ(): ?int
    {
        return $this->idQ;
    }

    public function getTextQ(): ?string
    {
        return $this->textQ;
    }

    public function setTextQ(?string $textQ): self
    {
        $this->textQ = $textQ;

        return $this;
    }

    public function getNbrPoint(): ?int
    {
        return $this->nbrPoint;
    }

    public function setNbrPoint(?int $nbrPoint): self
    {
        $this->nbrPoint = $nbrPoint;

        return $this;
    }


}
