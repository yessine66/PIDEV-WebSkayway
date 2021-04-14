<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apprenant
 *
 * @ORM\Table(name="apprenant", indexes={@ORM\Index(name="FK_Utilisateur_Apprenant", columns={"id"})})
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
     */
    private $idApp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    public function getIdApp(): ?int
    {
        return $this->idApp;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }


}
