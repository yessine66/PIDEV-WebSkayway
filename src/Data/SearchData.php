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

class SearchData
{
    /**
     * @var int
     */
    public $page = 1;

//rentre un mot cle
    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Partenaire[]
     */
    public $partenaire = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $promo = false;


}