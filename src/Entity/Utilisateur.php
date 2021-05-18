<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exception;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 * @ORM\Entity (repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface ,\Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("utilisateur")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=70, nullable=true,unique=true )
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Groups("utilisateur")
     */
    private $mail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $age;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genre", type="string", length=10, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $genre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naiss", type="datetime", nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $dateNaiss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=25, nullable=true)
     * @Assert\NotBlank(message="Please fill out this field ;) ")
     * @Groups("utilisateur")
     */
    private $role;

    /**
     * @var \DateTime $creCompte
     * @ORM\Column(name="cre_compte", type="datetime", nullable=false)
     * @Groups("utilisateur")
     */
    private $creCompte;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */
    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return int|null
     */
    public function getTel(): ?int
    {
        return $this->tel;
    }

    /**
     * @param int|null $tel
     */
    public function setTel(?int $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return string|null
     */
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    /**
     * @param string|null $genre
     */
    public function setGenre(?string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateNaiss(): ?\DateTime
    {
        return $this->dateNaiss;
    }

    /**
     * @param \DateTime|null $dateNaiss
     */
    public function setDateNaiss(?\DateTime $dateNaiss): void
    {
        $this->dateNaiss = $dateNaiss;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string|null $role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreCompte(): ?\DateTime
    {
        return $this->creCompte;
    }

    /**
     * @param \DateTime|null $creCompte
     */
    public function setCreCompte(?\DateTime $creCompte): void
    {
        $this->creCompte = $creCompte;
    }



    public function __toString(): ?string
    {
        if(is_null($this->username)){
            return  'NULL';
        }
        return $this->username;

    }

    /**
     * Construct the object
     * @param string $serialized <p>
     * the string representation of the object
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }
    public function eraseCredentials()
    {

    }
    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }

    /**
     * String of representation of object
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }
}
