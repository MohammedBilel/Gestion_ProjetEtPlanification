<?php

namespace App\Repository;

use App\Entity\ProjetEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjetEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetEntity[]    findAll()
 * @method ProjetEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjetEntity::class);
    }

    // /**
    //  * @return ProjetEntity[] Returns an array of ProjetEntity objects
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
    public function findOneBySomeField($value): ?ProjetEntity
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
