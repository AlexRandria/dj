<?php

namespace App\Repository;

use App\Entity\Deroulement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Deroulement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deroulement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deroulement[]    findAll()
 * @method Deroulement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeroulementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Deroulement::class);
    }

    // /**
    //  * @return Deroulement[] Returns an array of Deroulement objects
    //  */


    /*
    public function findOneBySomeField($value): ?Deroulement
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
