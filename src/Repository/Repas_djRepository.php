<?php

namespace App\Repository;

use App\Entity\Repas_dj;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Repas_dj|null find($id, $lockMode = null, $lockVersion = null)
 * @method Repas_dj|null findOneBy(array $criteria, array $orderBy = null)
 * @method Repas_dj[]    findAll()
 * @method Repas_dj[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Repas_djRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Repas_dj::class);
    }

    // /**
    //  * @return Repas_dj[] Returns an array of Repas_dj objects
    //  */


    /*
    public function findOneBySomeField($value): ?Repas_dj
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
