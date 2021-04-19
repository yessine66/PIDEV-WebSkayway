<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ev", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_ev", type="string", length=100, nullable=true)
     * @Assert\Length(
     *      min = 5,
     *      max = 250,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ ")
     */
    private $nomEv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ev", type="datetime", nullable=true)
     */
    private $dateEv;

    /**
     * @var string
     *
     * @ORM\Column(name="espace", type="string", length=255, nullable=false)
     * @Assert\Length(
     *      min = 5,
     *      max = 250,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ espace ")
     */
    private $espace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_pl", type="integer", nullable=true)
     * @Assert\NotBlank(message="vous devez saisir le nombre de places ")
     */
    private $nombrePl;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getIdEv(): ?int
    {
        return $this->idEv;
    }

    public function getNomEv(): ?string
    {
        return $this->nomEv;
    }

    public function setNomEv(?string $nomEv): self
    {
        $this->nomEv = $nomEv;

        return $this;
    }

    public function getDateEv(): ?\DateTimeInterface
    {
        return $this->dateEv;
    }

    public function setDateEv(?\DateTimeInterface $dateEv): self
    {
        $this->dateEv = $dateEv;

        return $this;
    }

    public function getEspace(): ?string
    {
        return $this->espace;
    }

    public function setEspace(string $espace): self
    {
        $this->espace = $espace;

        return $this;
    }

    public function getNombrePl(): ?int
    {
        return $this->nombrePl;
    }

    public function setNombrePl(?int $nombrePl): self
    {
        $this->nombrePl = $nombrePl;

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
