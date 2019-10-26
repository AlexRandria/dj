<?php

namespace App\Repository;

use App\Entity\Duree_formule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Duree_formule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Duree_formule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Duree_formule[]    findAll()
 * @method Duree_formule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Duree_formuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Duree_formule::class);
    }

    // /**
    //  * @return Duree_formule[] Returns an array of Duree_formule objects
    //  */


    /*
    public function findOneBySomeField($value): ?Duree_formule
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
