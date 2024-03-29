<?php

namespace App\Repository;

use App\Entity\Publique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Publique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publique[]    findAll()
 * @method Publique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PubliqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Publique::class);
    }

    // /**
    //  * @return Publique[] Returns an array of Publique objects
    //  */


    /*
    public function findOneBySomeField($value): ?Publique
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
