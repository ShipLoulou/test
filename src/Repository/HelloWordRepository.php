<?php

namespace App\Repository;

use App\Entity\HelloWord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HelloWord>
 *
 * @method HelloWord|null find($id, $lockMode = null, $lockVersion = null)
 * @method HelloWord|null findOneBy(array $criteria, array $orderBy = null)
 * @method HelloWord[]    findAll()
 * @method HelloWord[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HelloWordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HelloWord::class);
    }

    //    /**
    //     * @return HelloWord[] Returns an array of HelloWord objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?HelloWord
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
