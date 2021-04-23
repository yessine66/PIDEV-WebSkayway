<?php

namespace App\Repository;

use App\Controller\PromotionController;
use App\Data\SearchData;
use App\Entity\Promotion;
use App\Entity\Partenaire;
use ContainerNkGAt5s\PaginatorInterface_82dac15;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method Promotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Promotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Promotion[]    findAll()
 * @method Promotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionRepository extends ServiceEntityRepository
{
    /**
     * @var PaginatorInterface
     */
    private $paginator;
    public function __construct(ManagerRegistry $registry,PaginatorInterface $paginator )
    {
        parent::__construct($registry, Promotion::class);
        $this->paginator=$paginator;
    }


    /**
     * Récupère les promotions en lien avec une recherche
     * @return PaginationInterface
     */
    public function findSearch(SearchData $search): PaginationInterface
    {


        $query = $this
            ->createQueryBuilder('p')
            ->select('c','p')
            ->join('p.idP', 'c');


        if (!empty($search->q)){
            $query = $query
                ->andWhere('p.codeP LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }
        if (!empty($search->min)) {
            $query = $query
                ->andWhere('p.reduction >= :min')
                ->setParameter('min', $search->min);
        }

        if (!empty($search->max)) {
            $query = $query
                ->andWhere('p.reduction <= :max')
                ->setParameter('max', $search->max);
        }

        if (!empty($search->promo)) {
            $query = $query
                ->andWhere('p.reduction >= 50');
        }

        if (!empty($search-> partenaire)) {
            $query = $query
                ->andWhere('c.idP IN (:partenaire)')
                ->setParameter('partenaire', $search->partenaire);
        }

        /*  return $this->paginator->paginate(
              $query,
              $search->page,
              9
          );*/


        $query=$query->getQuery();
        return $this->paginator->paginate($query,$search->page,3 );

    }



    function tri_asc()
    {

        return $this->createQueryBuilder('promotion')
            ->orderBy('promotion.reduction','ASC')
            ->getQuery()->getResult();




    }

    function tri_desc()
    {
        return $this->createQueryBuilder('promotion')
            ->orderBy('promotion.reduction','DESC')
            ->getQuery()->getResult();


    }




























    // /**
    //  * @return Promotion[] Returns an array of Promotion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Promotion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
