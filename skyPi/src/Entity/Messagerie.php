<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Messagerie
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
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_pub", type="datetime", nullable=true)
     */
    private $datePub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinataire", type="string", length=100, nullable=true)
     */
    private $destinataire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;


}
