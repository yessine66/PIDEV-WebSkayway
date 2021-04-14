<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="id_ev", columns={"id_ev"}), @ORM\Index(name="id", columns={"id"})})
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
     *
     *   @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez le champ text ")
     */
    private $titreAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez le champ text ")
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ev", type="integer", nullable=false)
     * @Assert\NotBlank(message="vous devez le champ text ")
     */
    private $idEv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_ajout", type="string", length=255, nullable=true)
     */
    private $dateAjout;

    /**
     * @return int
     */
    public function getIdAc(): int
    {
        return $this->idAc;
    }

    /**
     * @param int $idAc
     */
    public function setIdAc(int $idAc): void
    {
        $this->idAc = $idAc;
    }

    /**
     * @return string|null
     */
    public function getTitreAc(): ?string
    {
        return $this->titreAc;
    }

    /**
     * @param string|null $titreAc
     */
    public function setTitreAc(?string $titreAc): void
    {
        $this->titreAc = $titreAc;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getIdEv(): ?int
    {
        return $this->idEv;
    }

    /**
     * @param int $idEv
     */
    public function setIdEv(?int $idEv): void
    {
        $this->idEv = $idEv;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getDateAjout(): ?string
    {
        return $this->dateAjout;
    }

    /**
     * @param string|null $dateAjout
     */
    public function setDateAjout(?string $dateAjout): void
    {
        $this->dateAjout = $dateAjout;
    }



}
