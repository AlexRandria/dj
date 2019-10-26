<?php

namespace App\Repository;

use App\Entity\Nb_partie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nb_partie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nb_partie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nb_partie[]    findAll()
 * @method Nb_partie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Nb_partieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nb_partie::class);
    }

    // /**
    //  * @return Nb_partie[] Returns an array of Nb_partie objects
    //  */


    /*
    public function findOneBySomeField($value): ?Nb_partie
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
