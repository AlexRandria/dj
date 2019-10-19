<?php

namespace App\Repository;

use App\Entity\Code_postal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Code_postal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Code_postal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Code_postal[]    findAll()
 * @method Code_postal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Code_postalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Code_postal::class);
    }

    // /**
    //  * @return Code_postal[] Returns an array of Code_postal objects
    //  */
    public function findByCodePostal($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nom_commune LIKE :val OR c.code_postal LIKE :val')
            ->setParameter('val', $value.'%')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByCode($val, $val2)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT c.code_postal, c.nom_commune 
                                   FROM App:Code_postal c
                                   WHERE (c.nom_commune LIKE :val2) AND (c.code_postal LIKE :val)
                                   ORDER BY c.code_postal ASC
                                 ") 
                    ->setParameters(['val' => $val.'%','val2' => $val2.'%']) 
                    ->setMaxResults(10) 
                    ->getResult();
    }
    /*
    public function findOneBySomeField($value): ?Code_postal
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
