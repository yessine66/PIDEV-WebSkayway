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


}
