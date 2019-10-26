<?php

namespace App\Repository;

use App\Entity\Formulaire_base;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Formulaire_base|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formulaire_base|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formulaire_base[]    findAll()
 * @method Formulaire_base[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Formulaire_baseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Formulaire_base::class);
    }

    // /**
    //  * @return Formulaire_base[] Returns an array of Formulaire_base objects
    //  */


    /*
    public function findOneBySomeField($value): ?Formulaire_base
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
