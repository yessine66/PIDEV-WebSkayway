<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"mail"},
 * message="le mail doit etre unique"
 * )
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=70, nullable=true)
     * @Assert\Email(message="l'email {{ value }} est non valide")
     * @Assert\Length(min="5",
     *     max="20",
     *     minMessage="Doit contenir au min {{ limit }}",
     *     maxMessage="Doit contenir au max {{ limit }}"
     * )
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $mail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $age;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genre", type="string", length=10, nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $genre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naiss", type="date", nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $dateNaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=0, nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $role;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cre_compte", type="date", nullable=true)
     *@Assert\NotBlank(message="Ce champ doit être rempli")
     */
    private $creCompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(?\DateTimeInterface $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getCreCompte(): ?\DateTimeInterface
    {
        return $this->creCompte;
    }

    public function setCreCompte(?\DateTimeInterface $creCompte): self
    {
        $this->creCompte = $creCompte;

        return $this;
    }


}
