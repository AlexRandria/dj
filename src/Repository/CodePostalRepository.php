<?php

namespace App\Repository;

use App\Entity\CodePostal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CodePostal|null find($id, $lockMode = null, $lockVersion = null)
 * @method CodePostal|null findOneBy(array $criteria, array $orderBy = null)
 * @method CodePostal[]    findAll()
 * @method CodePostal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodePostalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CodePostal::class);
    }

    // /**
    //  * @return CodePostal[] Returns an array of CodePostal objects
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
                    ->createQuery("SELECT c.id_code_postal, c.nom_commune, c.code_postal
                                   FROM App:CodePostal c
                                   WHERE (c.nom_commune LIKE :val2) AND (c.code_postal LIKE :val)
                                   ORDER BY c.code_postal ASC
                                 ") 
                    ->setParameters(['val' => $val.'%','val2' => $val2.'%']) 
                    ->setMaxResults(10) 
                    ->getResult();
    }
    public function findByCode2($val, $val2)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT c
                                   FROM App:CodePostal c
                                   WHERE (c.nom_commune LIKE :val2) AND (c.code_postal LIKE :val)
                                   ORDER BY c.code_postal ASC
                                 ") 
                    ->setParameters(['val' => $val.'%','val2' => $val2.'%']) 
                    ->setMaxResults(10) 
                    ->getResult();
    }
    /*
    public function findOneBySomeField($value): ?CodePostal
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
