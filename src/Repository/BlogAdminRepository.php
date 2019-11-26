<?php

namespace App\Repository;

use App\Entity\BlogAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BlogAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogAdmin[]    findAll()
 * @method BlogAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogAdmin::class);
    }

    // /**
    //  * @return BlogAdmin[] Returns an array of BlogAdmin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogAdmin
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
