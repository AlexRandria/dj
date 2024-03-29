<?php

namespace App\Repository;

use App\Entity\Format;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Format|null find($id, $lockMode = null, $lockVersion = null)
 * @method Format|null findOneBy(array $criteria, array $orderBy = null)
 * @method Format[]    findAll()
 * @method Format[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Format::class);
    }

    // /**
    //  * @return Format[] Returns an array of Format objects
    //  */


    /*
    public function findOneBySomeField($value): ?Format
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
