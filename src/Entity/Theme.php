<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Theme
 *
 * @ORM\Table(name="theme", indexes={@ORM\Index(name="id", columns={"id"})})
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
     * @Assert\NotBlank(message="vous devez remplir le champ nom cours ")

     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Le nom de theme doit contenir au moins{{ limit }} characters long",
     *      maxMessage = "Le nom de theme doit contenir au plus {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $nomT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ nom image ")

     */
    private $image;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
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
     * @return \Utilisateur
     */
    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    /**
     * @param \Utilisateur $id
     */
    public function setId(\Utilisateur $id): void
    {
        $this->id = $id;
    }


}
