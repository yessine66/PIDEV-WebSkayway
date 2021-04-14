<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=500, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_pub", type="string", length=30, nullable=true)
     */
    private $datePub;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatire", type="string", length=250, nullable=true)
     */
    private $destinatire;

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

    public function getIdCom(): ?int
    {
        return $this->idCom;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDatePub(): ?string
    {
        return $this->datePub;
    }

    public function setDatePub(?string $datePub): self
    {
        $this->datePub = $datePub;

        return $this;
    }

    public function getDestinatire(): ?string
    {
        return $this->destinatire;
    }

    public function setDestinatire(?string $destinatire): self
    {
        $this->destinatire = $destinatire;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


}
