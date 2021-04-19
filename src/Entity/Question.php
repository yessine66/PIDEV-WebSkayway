<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
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
     * @Assert\NotBlank
     */
    private $textQ;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_point", type="integer", nullable=true)
     * @Assert\LessThanOrEqual(5)
     */
    private $nbrPoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_t", type="string", length=250, nullable=true)
     * Assert\Length([
    'min' => 0,
    'minMessage' => "La question ne peut pas être vide.",
    'max' => 120,
    'maxMessage' => "La question doit faire moins de 120 caractères.",
    ])
     * )
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
