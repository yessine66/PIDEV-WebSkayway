<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\FeedbackRepository")
 */

class Feedback
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_f", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idF;

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
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=80, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ avis ")
     */
    private $avis;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getIdF(): ?int
    {
        return $this->idF;
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

    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;

        return $this;
    }


}
