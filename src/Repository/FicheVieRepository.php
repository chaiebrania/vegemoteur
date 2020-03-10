<?php

namespace App\Repository;

use App\Entity\FicheVie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FicheVie|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheVie|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheVie[]    findAll()
 * @method FicheVie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheVieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheVie::class);
    }

    // /**
    //  * @return FicheVie[] Returns an array of FicheVie objects
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
    public function findOneBySomeField($value): ?FicheVie
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
