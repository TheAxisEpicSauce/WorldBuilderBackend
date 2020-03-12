<?php

namespace App\Repository\Setting\God;

use App\Entity\Setting\God\God;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method God|null find($id, $lockMode = null, $lockVersion = null)
 * @method God|null findOneBy(array $criteria, array $orderBy = null)
 * @method God[]    findAll()
 * @method God[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, God::class);
    }

    // /**
    //  * @return God[] Returns an array of God objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?God
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
