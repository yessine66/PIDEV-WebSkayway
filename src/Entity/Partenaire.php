<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity (repositoryClass="App\Repository\PartenaireRepository")
 * @UniqueEntity(fields={"mailp"},
 * message="le mail d'un partenaire  doit etre unique"
 * )
 */
class Partenaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_p", type="string", length=100, nullable=true)
     */
    private $nomP;
    private $file;
    /**
     * @var string|null
     *
     * @ORM\Column(name="domaine", type="string", length=50, nullable=true)
     */
    private $domaine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_p", type="string", length=40, nullable=true)
     */
    private $dateP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mailP", type="string", length=250, nullable=true)
     * @Assert\Email(message="l'email {{ value }} est nom valide")
     * @Assert\Length(min="5",
     *     max="20",
     *     minMessage="Doit contenir au min {{ limit }}",
     *     maxMessage="Doit contenir au max {{ limit }}"
     * )
     */
    private $mailp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logoP", type="string", length=250, nullable=true)
     */
    private $logop;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @return int
     */
    public function getIdP(): int
    {
        return $this->idP;
    }

    /**
     * @param int $idP
     */
    public function setIdP(int $idP): void
    {
        $this->idP = $idP;
    }

    /**
     * @return string|null
     */
    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    /**
     * @param string|null $nomP
     */
    public function setNomP(?string $nomP): void
    {
        $this->nomP = $nomP;
    }

    /**
     * @return string|null
     */
    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    /**
     * @param string|null $domaine
     */
    public function setDomaine(?string $domaine): void
    {
        $this->domaine = $domaine;
    }

    /**
     * @return string|null
     */
    public function getDateP(): ?string
    {
        return $this->dateP;
    }

    /**
     * @param string|null $dateP
     */
    public function setDateP(?string $dateP): void
    {
        $this->dateP = $dateP;
    }

    /**
     * @return string|null
     */
    public function getMailp(): ?string
    {
        return $this->mailp;
    }

    /**
     * @param string|null $mailp
     */
    public function setMailp(?string $mailp): void
    {
        $this->mailp = $mailp;
    }

    /**
     * @return string|null
     */
    public function getLogop(): ?string
    {
        return $this->logop;
    }

    /**
     * @param string|null $logop
     */
    public function setLogop(?string $logop): void
    {
        $this->logop = $logop;
    }


    public function getId(): ?Utilisateur
    {
        return $this->id;
    }


    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;
        return $this;
    }









    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function getUploadDir()
    {
        return 'logoP';
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().$this->logop ;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->logop;
    }

    public function getUploadRoot()
    {
        return __DIR__.'/../../public/'.$this->getUploadDir().'/';
    }

    public function upload()
    {

        if($this->file === null){
            return;

        }
        $this->logop = $this->file->getClientOriginalName();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),'0777',true);
        }

        $this->file->move($this->getUploadRoot(),$this->logop);
        unset($this->file);
    }


    public function __toString(): ?string
    {
        if(is_null($this->nomP)) {
            return 'NULL';
        }
        return $this->nomP;
    }

}
