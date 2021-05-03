<?php
namespace App\Data;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PromotionRepository;
use App\Entity\Partenaire;
use App\Form\PartenaireType;
class DataMail
{

//rentre un mot cle
    /**
     * @var string []
     */
    public $from = [];

    /**
     * @var Partenaire[]
     */
    public $partenaire = [];

    /**
     * @var string []
     */
    public $to  = [];

    /**
     * @var string []
     */
    public $message  = [];



}