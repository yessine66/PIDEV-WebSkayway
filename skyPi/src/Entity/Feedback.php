<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Feedback
 *
 * @ORM\Table(name="feedback")
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=80, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ objet ")
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=80, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ text ")
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="avis", type="integer", nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ avis ")
     */
    private $avis;

    /**
     * @var string
     *
     * @ORM\Column(name="id_user", type="string", length=80, nullable=false)
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
