<?php

namespace App\Repository;

use App\Entity\ChefEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChefEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChefEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChefEntity[]    findAll()
 * @method ChefEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChefEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChefEntity::class);
    }

    // /**
    //  * @return ChefEntity[] Returns an array of ChefEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChefEntity
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
