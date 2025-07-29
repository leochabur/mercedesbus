<?php

namespace App\Repository\Finanzas;

use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\Proveedor;
use App\Entity\Finanzas\CtaCte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CtaCte>
 */
class CtaCteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CtaCte::class);
    }

       /**
        * @return CtaCte[] Returns an array of CtaCte objects
        */
       public function movimientosCuentas($value): array
       {
           return $this->createQueryBuilder('c')
                       ->andWhere('c.exampleField = :val')
                       ->setParameter('val', $value)
                       ->orderBy('c.id', 'ASC')
                       ->setMaxResults(10)
                       ->getQuery()
                       ->getResult()
                   ;
       }

       public function getCtaCteEntidad($titular, $grupo): ?CtaCte
       {
           return $this->createQueryBuilder('c')
                        ->andWhere('c.titular = :titular')
                        ->andWhere('c.empresaGrupo = :grupo')
                        ->setParameter('titular', $titular)
                        ->setParameter('grupo', $grupo)
                        ->getQuery()
                        ->getOneOrNullResult()
                    ;
       }

        public function resumenCtaCte($grupo, $t): ?array
       {
            return $this->createQueryBuilder('cc')
                        ->select(
                            'cc.id as id',
                            't.razonSocial AS titular',
                            'SUM(CASE WHEN c INSTANCE OF App\Entity\Finanzas\MovimientoVenta THEN c.importe ELSE 0 END) AS totalFacturas',
                            'SUM(CASE WHEN c INSTANCE OF App\Entity\Finanzas\MovimientoPago THEN c.importe ELSE 0 END) AS totalRecibos'
                        )
                        ->join('cc.titular', 't')                        
                        ->join('cc.movimientos', 'c') 
                        ->where('c.deletedAt IS NULL')
                        ->andWhere('cc.empresaGrupo = :grupo')
                        ->andWhere('t INSTANCE OF ' . ($t == 'c' ?  Cliente::class : Proveedor::class))
                        ->setParameter('grupo', $grupo)
                        ->groupBy('cc.id')
                        ->orderBy('t.razonSocial', 'ASC')
                        ->getQuery()
                        ->getArrayResult();
       }


}
