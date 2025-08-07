<?php

namespace App\Repository\Administracion;

use App\Entity\Administracion\ArticuloConcepto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticuloConcepto>
 */
class ArticuloConceptoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticuloConcepto::class);
    }

       /**
        * @return ArticuloConcepto[] Returns an array of ArticuloConcepto objects
        */
       public function getAllProductosCircuito($circuito): array
       {
           return $this->createQueryBuilder('a')
                        ->andWhere('a.circuito = :val')
                        ->setParameter('val', $circuito)
                        ->orWhere('a.circuito = :all')
                        ->setParameter('all', 3)
                        ->orderBy('a.nombre', 'ASC')
                        ->getQuery()
                        ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?ArticuloConcepto
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
