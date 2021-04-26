<?php


namespace App\Repository;


use App\Entity\Evenement;
use Doctrine\ORM\EntityRepository;

class EvenementRepository extends EntityRepository
{
    public function findEvenementByIdEv ($idEv) {
       return $this->createQueryBuilder('evenement')
            ->where('evenement.id_ev LIKE :id_ev')
            ->setParameter('id_ev', '%'.$idEv.'%')
            ->getQuery()
            ->getResult();
    }

}