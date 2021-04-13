<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_r", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idR;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_r1", type="string", length=250, nullable=true)
     */
    private $textR1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r2", type="string", length=250, nullable=false)
     */
    private $textR2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r3", type="string", length=250, nullable=false)
     */
    private $textR3;

    /**
     * @var string
     *
     * @ORM\Column(name="text_r4", type="string", length=250, nullable=false)
     */
    private $textR4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_q", type="integer", nullable=true)
     */
    private $idQ;


}
