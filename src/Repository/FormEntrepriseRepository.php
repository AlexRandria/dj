<?php

namespace App\Repository;

use App\Entity\FormEntreprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormEntreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormEntreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormEntreprise[]    findAll()
 * @method FormEntreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormEntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormEntreprise::class);
    }

    // /**
    //  * @return FormEntreprise[] Returns an array of FormEntreprise objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormEntreprise
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
