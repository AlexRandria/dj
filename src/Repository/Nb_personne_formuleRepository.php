<?php

namespace App\Repository;

use App\Entity\Nb_personne_formule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nb_personne_formule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nb_personne_formule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nb_personne_formule[]    findAll()
 * @method Nb_personne_formule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Nb_personne_formuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nb_personne_formule::class);
    }

    // /**
    //  * @return Nb_personne_formule[] Returns an array of Nb_personne_formule objects
    //  */


    /*
    public function findOneBySomeField($value): ?Nb_personne_formule
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
