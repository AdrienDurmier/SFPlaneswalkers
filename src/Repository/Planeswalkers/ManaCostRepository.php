<?php

namespace App\Repository\Planeswalkers;

use App\Entity\Planeswalkers\ManaCost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ManaCost|null find($id, $lockMode = null, $lockVersion = null)
 * @method ManaCost|null findOneBy(array $criteria, array $orderBy = null)
 * @method ManaCost[]    findAll()
 * @method ManaCost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ManaCostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ManaCost::class);
    }

    // /**
    //  * @return ManaCost[] Returns an array of ManaCost objects
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
    public function findOneBySomeField($value): ?ManaCost
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
