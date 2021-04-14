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

    /**
     * @return int
     */
    public function getIdParticiper(): int
    {
        return $this->idParticiper;
    }

    /**
     * @param int $idParticiper
     */
    public function setIdParticiper(int $idParticiper): void
    {
        $this->idParticiper = $idParticiper;
    }

    /**
     * @return int
     */
    public function getIdCours(): int
    {
        return $this->idCours;
    }

    /**
     * @param int $idCours
     */
    public function setIdCours(int $idCours): void
    {
        $this->idCours = $idCours;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }


}
