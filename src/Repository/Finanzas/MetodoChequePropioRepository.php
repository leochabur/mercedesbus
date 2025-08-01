<?php

namespace App\Repository\Finanzas;

use App\Entity\Finanzas\MetodoChequePropio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MetodoChequePropio>
 */
class MetodoChequePropioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetodoChequePropio::class);
    } 


       public function getAllValores(): array
       {
           return $this->createQueryBuilder('cp')
                        ->select('r.fecha as fechaEntrega, cb.numero as ctacte, cp.fechaPago as fechaPago, cp.numeroCheque as numero, cp.acreditado as acreditado, ec.razonSocial as razonSocial, cp.importe as importe, b.nombre as banco')
                        ->join('cp.ctaCteBanco', 'cb')
                        ->join('cb.banco', 'b')
                        ->join('cp.recibo', 'r')
                        ->join('r.enteComercial', 'ec')
                        ->getQuery()
                        ->getResult()
           ;
       }

    //    /**
    //     * @return MetodoChequePropio[] Returns an array of MetodoChequePropio objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?MetodoChequePropio
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
