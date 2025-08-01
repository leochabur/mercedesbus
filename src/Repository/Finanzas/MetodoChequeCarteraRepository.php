<?php

namespace App\Repository\Finanzas;

use App\Entity\Finanzas\MetodoChequeCartera;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MetodoChequeCartera>
 */
class MetodoChequeCarteraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetodoChequeCartera::class);
    }

       /**
        * @return MetodoChequeCartera[] Returns an array of MetodoChequeCartera objects
        */
       public function getAllValoresEnCartera(): array
       {
           return $this->createQueryBuilder('m')
                        ->select('r.fecha as fechaEntrega, ct.fechaPago as fechaPago, ct.numeroCheque as numero, ct.entregado as entregado, ec.razonSocial as razonSocial, m.importe as importe')
                        ->join('m.chequeCartera', 'ct')
                        ->join('ct.banco', 'b')
                        ->join('ct.recibo', 'r')
                        ->join('r.enteComercial', 'ec')
                        ->getQuery()
                        ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?MetodoChequeCartera
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
