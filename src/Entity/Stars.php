<?php

namespace App\Entity;

use App\Repository\StarsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StarsRepository::class)
 */
class Stars
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rateindex;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rateindexx;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRateindex(): ?string
    {
        return $this->rateindex;
    }

    public function setRateindex(string $rateindex): self
    {
        $this->rateindex = $rateindex;

        return $this;
    }

    public function getRateindexx(): ?string
    {
        return $this->rateindexx;
    }

    public function setRateindexx(string $rateindexx): self
    {
        $this->rateindexx = $rateindexx;

        return $this;
    }
}
