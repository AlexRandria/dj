<?php

namespace App\Repository;

use App\Entity\Habillage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Habillage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habillage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habillage[]    findAll()
 * @method Habillage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabillageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Habillage::class);
    }

    // /**
    //  * @return Habillage[] Returns an array of Habillage objects
    //  */


    /*
    public function findOneBySomeField($value): ?Habillage
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
