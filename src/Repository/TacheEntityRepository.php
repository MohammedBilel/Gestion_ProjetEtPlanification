<?php

namespace App\Repository;

use App\Entity\TacheEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TacheEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method TacheEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method TacheEntity[]    findAll()
 * @method TacheEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TacheEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TacheEntity::class);
    }

    // /**
    //  * @return TacheEntity[] Returns an array of TacheEntity objects
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
    public function findOneBySomeField($value): ?TacheEntity
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
