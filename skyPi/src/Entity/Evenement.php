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
     *      max = 50,
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
     *
     */
    private $dateEv;

    /**
     * @var string
     *
     * @ORM\Column(name="espace", type="string", length=255, nullable=false)
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ")
     */
    private $espace;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_pl", type="integer", nullable=true)
     * @Assert\Length(
     *      min = 1,
     *      max = 3,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *  )
     * @Assert\NotBlank(message="vous devez remplir le champ ")
     */
    private $nombrePl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @return int
     */
    public function getIdEv(): int
    {
        return $this->idEv;
    }

    /**
     * @param int $idEv
     */
    public function setIdEv(int $idEv): void
    {
        $this->idEv = $idEv;
    }

    /**
     * @return string|null
     */
    public function getNomEv(): ?string
    {
        return $this->nomEv;
    }

    /**
     * @param string|null $nomEv
     */
    public function setNomEv(?string $nomEv): void
    {
        $this->nomEv = $nomEv;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateEv(): ?\DateTime
    {
        return $this->dateEv;
    }

    /**
     * @param \DateTime|null $dateEv
     */
    public function setDateEv(?\DateTime $dateEv): void
    {
        $this->dateEv = $dateEv;
    }

    /**
     * @return string|null
     */
    public function getEspace(): ?string
    {
        return $this->espace;
    }

    /**
     * @param string|null $espace
     */
    public function setEspace(?string $espace): void
    {
        $this->espace = $espace;
    }

    /**
     * @return int|null
     */
    public function getNombrePl(): ?int
    {
        return $this->nombrePl;
    }

    /**
     * @param int|null $nombrePl
     */
    public function setNombrePl(?int $nombrePl): void
    {
        $this->nombrePl = $nombrePl;
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


}
