<?php

namespace App\Repository\Finanzas;

use App\Entity\Finanzas\Recibo; 
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recibo>
 */
class ReciboRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recibo::class);
    }

    public function findLastId(): ?int
    {
        return $this->createQueryBuilder('e')
            ->select('MAX(e.id) + 1')
            ->getQuery()
            ->getSingleScalarResult();
    }

       /**
        * @return Recibo[] Returns an array of Recibo objects
        */
       public function getRecibosPendientes($ente, $grupo): array
       {
           return $this->createQueryBuilder('c')
                        ->join('c.movimiento', 'mv')
                        ->andWhere('c.enteComercial = :ente')
                        ->andWhere('c.empresaGrupo = :grupo')
                        ->andWhere('c.deletedAt IS NULL')
                        ->setParameter('grupo', $grupo)
                        ->setParameter('ente', $ente)
                        ->andWhere('ROUND(c.montoAplicado,2) < ROUND(c.precioTotalConIva,2)')
                        ->andWhere('c.eliminado = :eliminado')
                        ->setParameter('eliminado', false)
                        ->orderBy('c.fecha', 'ASC')
                        ->getQuery()
                        ->getResult()
           ;
       }

    //    /**
    //     * @return Recibo[] Returns an array of Recibo objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Recibo
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
