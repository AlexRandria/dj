<?php

namespace App\Repository;

use App\Entity\Vetement_dj;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vetement_dj|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vetement_dj|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vetement_dj[]    findAll()
 * @method Vetement_dj[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Vetement_djRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vetement_dj::class);
    }

    // /**
    //  * @return Vetement_dj[] Returns an array of Vetement_dj objects
    //  */


    /*
    public function findOneBySomeField($value): ?Vetement_dj
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
