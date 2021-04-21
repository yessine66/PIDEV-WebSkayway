<?php

namespace App\Repository;

use App\Entity\QuestionRecherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuestionRecherche|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionRecherche|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionRecherche[]    findAll()
 * @method QuestionRecherche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionRechercheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionRecherche::class);
    }

    // /**
    //  * @return QuestionRecherche[] Returns an array of QuestionRecherche objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionRecherche
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
