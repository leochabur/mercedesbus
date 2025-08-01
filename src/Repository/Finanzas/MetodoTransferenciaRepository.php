<?php

namespace App\Repository\Finanzas;

use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\Proveedor;
use App\Entity\Finanzas\MetodoTransferencia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<MetodoTransferencia>
 */
class MetodoTransferenciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetodoTransferencia::class);
    }


    public function getAllValores($type)
    {

        return $this->createQueryBuilder('tb')
                    ->select('r.fecha as fechaEntrega, cb.numero as ctacte, r.fecha as fecha, ec.razonSocial as razonSocial, tb.importe as importe, b.nombre as banco')
                    ->join('tb.CtaCteBanco', 'cb')
                    ->join('cb.banco', 'b')
                    ->join('tb.recibo', 'r')
                    ->join('r.enteComercial', 'ec')
                    ->andWhere('ec INSTANCE OF :type')
                    ->setParameter('type', ($type == 'c' ? Cliente::class : Proveedor::class ))
                    ->getQuery()
                    ->getResult()
        ;
    }

    //    /**
    //     * @return MetodoTransferencia[] Returns an array of MetodoTransferencia objects
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

    //    public function findOneBySomeField($value): ?MetodoTransferencia
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
