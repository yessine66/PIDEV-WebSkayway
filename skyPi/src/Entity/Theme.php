<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Theme
 *
 * @ORM\Table(name="theme", indexes={@ORM\Index(name="id_cat", columns={"id_cat"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Theme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_t", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idT;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_t", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ Nom Theme ")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le nom de theme doit contenir au moins {{ limit }} characters long",
     *      maxMessage = "Le nom de theme doit contenir au plus {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $nomT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cat", type="integer", nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ id categorie ")
     */
    private $idCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ id  ")
     */
    private $id;

    /**
     * @return int
     */
    public function getIdT(): int
    {
        return $this->idT;
    }

    /**
     * @param int $idT
     */
    public function setIdT(int $idT): void
    {
        $this->idT = $idT;
    }

    /**
     * @return string
     */
    public function getNomT(): ?string
    {
        return $this->nomT;
    }

    /**
     * @param string $nomT
     */
    public function setNomT(string $nomT): void
    {
        $this->nomT = $nomT;
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
    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    /**
     * @param int|null $idCat
     */
    public function setIdCat(?int $idCat): void
    {
        $this->idCat = $idCat;
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