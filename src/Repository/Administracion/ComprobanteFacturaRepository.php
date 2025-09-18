<?php

namespace App\Repository\Administracion;

use App\Entity\Administracion\ComprobanteFactura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Finanzas\Recibo;

/**
 * @extends ServiceEntityRepository<ComprobanteCliente>
 */
class ComprobanteFacturaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComprobanteFactura::class);
    }


       /**
        * @return ComprobanteCliente[] Returns an array of ComprobanteCliente objects
        */
       public function getComprobantesPendientes($ente, $grupo): array
       {
           return $this->createQueryBuilder('c')
                        ->join('c.movimientoVenta', 'mv')
                        ->andWhere('c.enteComercial = :ente')
                        ->andWhere('c.empresaGrupo = :grupo')
                        ->setParameter('grupo', $grupo)
                        ->setParameter('ente', $ente)
                        ->andWhere('ROUND(c.saldoACancelar,2) > 0')
                        ->where('c.deletedAt IS NULL')
                        ->andWhere('c.eliminado = :eliminado')
                        ->setParameter('eliminado', false)
                        ->orderBy('c.fecha', 'ASC')
                        ->getQuery()
                        ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?ComprobanteCliente
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
