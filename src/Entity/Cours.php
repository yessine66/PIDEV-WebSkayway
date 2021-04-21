<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_categorie", columns={"id_categorie"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_c", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="vous devez remplir le champ nom cours ")

     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Le nom de cours doit contenir au moins{{ limit }} characters long",
     *      maxMessage = "Le nom de cours doit contenir au plus {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $nomC;

    /**
     * @var
     *
     * @ORM\Column(name="pdf", type="string", length=500, nullable=false)
     */
    private $pdf;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     *  * @Assert\NotBlank(message="vous devez remplir le champ description ")

     *       @Assert\Length(
     *      min = 10,
     *      max = 200,
     *      minMessage = "La description doit contenir au moins {{ limit }} characters long",
     *      maxMessage = "La description doit contenir au plus {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbparticipant", type="integer", nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ nombre de participant ")

     */
    private $nbparticipant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     * @Assert\NotBlank(message="vous devez remplir le champ image ")

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
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie;

    /**
     * @return int
     */
    public function getIdC(): int
    {
        return $this->idC;
    }

    /**
     * @param int $idC
     */
    public function setIdC(int $idC): void
    {
        $this->idC = $idC;
    }

    /**
     * @return string
     */
    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    /**
     * @param string $nomC
     */
    public function setNomC(string $nomC): void
    {
        $this->nomC = $nomC;
    }


    public function getPdf()
    {
        return $this->pdf;
    }


    public function setPdf($pdf)
    {
        $this->pdf = $pdf;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getNbparticipant(): ?int
    {
        return $this->nbparticipant;
    }

    /**
     * @param int|null $nbparticipant
     */
    public function setNbparticipant(?int $nbparticipant): void
    {
        $this->nbparticipant = $nbparticipant;
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
    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Categorie
     */
    public function getIdCategorie(): ?Categorie
    {
        return $this->idCategorie;
    }

    /**
     * @param \Categorie $idCategorie
     */
    public function setIdCategorie(?Categorie $idCategorie): self
    {
        $this->idCategorie = $idCategorie;
        return $this;
    }

    public function __toString(): string
    {
        return  $this->nomC;
    }


}
