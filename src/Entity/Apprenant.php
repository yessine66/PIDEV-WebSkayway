<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Apprenant
 *
 * @ORM\Table(name="apprenant", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Apprenant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_app", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("utilisateur")
     */
    private $idApp;



    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     * @Groups("utilisateur")
     */
    private $description;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     * @Groups("utilisateur")
     */
    private $id;


    /**
     * @param int $idApp
     */
    public function setIdApp(int $idApp): void
    {
        $this->idApp = $idApp;
    }

    public function getIdApp(): ?int
    {
        return $this->idApp;
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
