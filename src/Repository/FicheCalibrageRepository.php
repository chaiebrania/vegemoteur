<?php

namespace App\Repository;

use App\Entity\FicheCalibrage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FicheCalibrage|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheCalibrage|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheCalibrage[]    findAll()
 * @method FicheCalibrage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheCalibrageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheCalibrage::class);
    }

    // /**
    //  * @return FicheCalibrage[] Returns an array of FicheCalibrage objects
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
    public function findOneBySomeField($value): ?FicheCalibrage
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
