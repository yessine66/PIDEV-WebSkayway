<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="id_t", columns={"id_t"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ Nom categorie ")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le nom de categorie doit contenir au moins {{ limit }} characters long",
     *      maxMessage = "Le nom de categorie doit contenir au plus {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */

    private $nomCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_t", type="integer", nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ id theme ")
     */
    private $idT;

    /**
     * @return int
     */
    public function getIdCategorie(): int
    {
        return $this->idCategorie;
    }

    /**
     * @param int $idCategorie
     */
    public function setIdCategorie(int $idCategorie): void
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return string
     */
    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    /**
     * @param string $nomCategorie
     */
    public function setNomCategorie(string $nomCategorie): void
    {
        $this->nomCategorie = $nomCategorie;
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
     * @return int|null
     */
    public function getIdT(): ?int
    {
        return $this->idT;
    }

    /**
     * @param int|null $idT
     */
    public function setIdT(?int $idT): void
    {
        $this->idT = $idT;
    }


}
