<?php

namespace App\Repository\Finanzas;

use App\Entity\Finanzas\MovimientoCuenta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MovimientoCuenta>
 */
class MovimientoCuentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MovimientoCuenta::class);
    }


        public function resumenCtresumenMovimientosaCte( $titular , $grupo): ?array
       {
            return $this->createQueryBuilder('m')                   
                        ->join('m.ctaCte', 'cc') 
                        ->where('m.deletedAt IS NULL')
                        ->andWhere('cc.empresaGrupo = :grupo')
                        ->andWhere('cc.titular = :titular')
                        ->setParameter('titular', $titular)
                        ->setParameter('grupo', $grupo)
                        ->orderBy('m.fechaAlta', 'ASC')
                        ->getQuery()
                        ->getResult();
       }


    //    /**
    //     * @return MovimientoCuenta[] Returns an array of MovimientoCuenta objects
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

    //    public function findOneBySomeField($value): ?MovimientoCuenta
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
