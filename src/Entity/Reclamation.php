<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=50, nullable=false)
     * @Assert\Length(
     *      min = 4,
     *      max = 25,
     *      minMessage = "l objet doit contenir au moins {{ limit }} caractéres ",
     *      maxMessage = "l objet doit contenir au maximum {{ limit }} caractéres ",
     *      allowEmptyString = false
     *  )
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ text ")
     */
    private $textR;

    /**
     * @var string
     *
     * @ORM\Column(name="date_envoi", type="string", length=50, nullable=false)

     */
    private $dateEnvoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cours", type="string", length=50, nullable=true)

     */
    private $cours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enseignant", type="string", length=50, nullable=true)

     */
    private $enseignant;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })

     */
    private $id;

    public function getIdRec(): ?int
    {
        return $this->idRec;
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

    public function getTextR(): ?string
    {
        return $this->textR;
    }

    public function setTextR(string $textR): self
    {
        $this->textR = $textR;

        return $this;
    }

    public function getDateEnvoi(): ?string
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(string $dateEnvoi): self
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    public function getCours(): ?string
    {
        return $this->cours;
    }

    public function setCours(?string $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getEnseignant(): ?string
    {
        return $this->enseignant;
    }

    public function setEnseignant(?string $enseignant): self
    {
        $this->enseignant = $enseignant;

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
