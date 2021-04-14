<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticiper;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     */
    private $idCours;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    public function getIdParticiper(): ?int
    {
        return $this->idParticiper;
    }

    public function getIdCours(): ?int
    {
        return $this->idCours;
    }

    public function setIdCours(int $idCours): self
    {
        $this->idCours = $idCours;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
