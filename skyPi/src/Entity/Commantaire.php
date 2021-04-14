<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commantaire
 *
 * @ORM\Table(name="commantaire")
 * @ORM\Entity
 */
class Commantaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=250, nullable=true)
     */
    private $statut;

    public function getIdMes(): ?int
    {
        return $this->idMes;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
