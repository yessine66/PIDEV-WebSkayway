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
     * @ORM\Column(name="text_r", type="string", length=250, nullable=true)
     */
    private $textR;

    /**
     * @var int
     *
     * @ORM\Column(name="id_q", type="integer", nullable=false)
     */
    private $idQ;

    public function getIdR(): ?int
    {
        return $this->idR;
    }

    public function getTextR(): ?string
    {
        return $this->textR;
    }

    public function setTextR(?string $textR): self
    {
        $this->textR = $textR;

        return $this;
    }

    public function getIdQ(): ?int
    {
        return $this->idQ;
    }

    public function setIdQ(int $idQ): self
    {
        $this->idQ = $idQ;

        return $this;
    }


}
