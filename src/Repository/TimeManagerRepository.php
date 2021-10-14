<?php

namespace App\Repository;

use App\Entity\TimeManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TimeManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimeManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimeManager[]    findAll()
 * @method TimeManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimeManagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimeManager::class);
    }

    // /**
    //  * @return TimeManager[] Returns an array of TimeManager objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimeManager
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
