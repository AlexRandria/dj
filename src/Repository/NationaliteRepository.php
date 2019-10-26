<?php

namespace App\Repository;

use App\Entity\Nationalite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nationalite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nationalite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nationalite[]    findAll()
 * @method Nationalite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NationaliteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nationalite::class);
    }

    // /**
    //  * @return Nationalite[] Returns an array of Nationalite objects
    //  */


    /*
    public function findOneBySomeField($value): ?Nationalite
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
