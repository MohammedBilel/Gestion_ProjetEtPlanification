<?php

namespace App\Repository;

use App\Entity\MessagerieEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MessagerieEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessagerieEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessagerieEntity[]    findAll()
 * @method MessagerieEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessagerieEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessagerieEntity::class);
    }

    // /**
    //  * @return MessagerieEntity[] Returns an array of MessagerieEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MessagerieEntity
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
