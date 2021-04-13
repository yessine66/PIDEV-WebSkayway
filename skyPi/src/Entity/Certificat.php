<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificat
 *
 * @ORM\Table(name="certificat")
 * @ORM\Entity
 */
class Certificat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_certif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCertif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_certif", type="string", length=250, nullable=true)
     */
    private $titreCertif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_certif", type="string", length=40, nullable=true)
     */
    private $dateCertif;

    /**
     * @return int
     */
    public function getIdCertif(): int
    {
        return $this->idCertif;
    }

    /**
     * @param int $idCertif
     */
    public function setIdCertif(int $idCertif): void
    {
        $this->idCertif = $idCertif;
    }

    /**
     * @return string|null
     */
    public function getTitreCertif(): ?string
    {
        return $this->titreCertif;
    }

    /**
     * @param string|null $titreCertif
     */
    public function setTitreCertif(?string $titreCertif): void
    {
        $this->titreCertif = $titreCertif;
    }

    /**
     * @return string|null
     */
    public function getDateCertif(): ?string
    {
        return $this->dateCertif;
    }

    /**
     * @param string|null $dateCertif
     */
    public function setDateCertif(?string $dateCertif): void
    {
        $this->dateCertif = $dateCertif;
    }


}
