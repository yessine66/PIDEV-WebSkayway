<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Reponse;
use App\Form\ReponseType;
use Symfony\Component\Serializer\Annotation\Groups;
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
     * @Groups({"question"})
     */
    private $idQ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_q", type="string", length=250, nullable=true)
     * @Assert\NotBlank
     * @Groups({"question"})
     */
    private $textQ;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_point", type="integer", nullable=true)
     * @Assert\LessThanOrEqual(5)
     * @Groups({"question"})
     */
    private $nbrPoint;

    /**
     * @var string|null
     *  @Groups({"question"})
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

    public function getDataFromAnotherEntity($textR1)
    {
        $query = 'select * from App\Entity\Reponse alpha where reponse.idQ = :question.idQ';
        return $this->getEntityManager()
            ->createQuery($query)
            ->setParameter('textR1', $textR1)
            ->getResult();
    }
    public function preAction(Question $args)
    {
        $textR1 = $args->getObject();
        $entityManager = $args->getObjectManager();

        if (method_exists($textR1, 'getTextR1')) {
            if ($textR1->getTextR1() === null) {
                $textR1->setTextR1($entityManager->getReference('App\Entity\Reponse', textR1));
            }
        }
    }




}
