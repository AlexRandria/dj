<?php

namespace App\Repository;

use App\Entity\Style_dj;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Style_dj|null find($id, $lockMode = null, $lockVersion = null)
 * @method Style_dj|null findOneBy(array $criteria, array $orderBy = null)
 * @method Style_dj[]    findAll()
 * @method Style_dj[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Style_djRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Style_dj::class);
    }

    // /**
    //  * @return Style_dj[] Returns an array of Style_dj objects
    //  */


    /*
    public function findOneBySomeField($value): ?Style_dj
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
