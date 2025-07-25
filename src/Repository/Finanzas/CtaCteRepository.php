<?php

namespace App\Repository\Finanzas;

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
}
