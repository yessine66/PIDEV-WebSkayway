<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdm;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getIdAdm(): ?int
    {
        return $this->idAdm;
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
