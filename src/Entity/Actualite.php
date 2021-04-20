<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_ev", columns={"id_ev"})})
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ac", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_ac", type="string", length=100, nullable=true)
     * @Assert\Length(
     *      min = 5,
     *      max = 250,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ titre")
     */
    private $titreAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     * @Assert\Length(
     *      min = 10,
     *      max = 250,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ description ")
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ ")
     */
    private $image;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ajout", type="datetime", nullable=true)
     */
    private $dateAjout;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ev", referencedColumnName="id_ev")
     * })
     */
    private $idEv;

    public function getIdAc(): ?int
    {
        return $this->idAc;
    }

    public function getTitreAc(): ?string
    {
        return $this->titreAc;
    }

    public function setTitreAc(?string $titreAc): self
    {
        $this->titreAc = $titreAc;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(?\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

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

    public function getIdEv(): ?Evenement
    {
        return $this->idEv;
    }

    public function setIdEv(?Evenement $idEv): self
    {
        $this->idEv = $idEv;

        return $this;
    }


}
