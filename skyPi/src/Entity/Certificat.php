<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\NotBlank
     * @Assert\Unique
     */
    private $titreCertif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_certif", type="string", length=40, nullable=true)
     * @Assert\NotBlank
     */
    private $dateCertif;

    public function getIdCertif(): ?int
    {
        return $this->idCertif;
    }

    public function getTitreCertif(): ?string
    {
        return $this->titreCertif;
    }

    public function setTitreCertif(?string $titreCertif): self
    {
        $this->titreCertif = $titreCertif;

        return $this;
    }

    public function getDateCertif(): ?string
    {
        return $this->dateCertif;
    }

    public function setDateCertif(?string $dateCertif): self
    {
        $this->dateCertif = $dateCertif;

        return $this;
    }


}
