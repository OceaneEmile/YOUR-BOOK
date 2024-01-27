<?php

namespace App\Repository;

use App\Entity\Adhérent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Adhérent>
 *
 * @method Adhérent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adhérent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adhérent[]    findAll()
 * @method Adhérent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdhérentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adhérent::class);
    }

//    /**
//     * @return Adhérent[] Returns an array of Adhérent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Adhérent
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
