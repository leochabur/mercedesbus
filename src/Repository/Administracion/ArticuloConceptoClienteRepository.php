<?php

namespace App\Repository\Administracion;

use App\Entity\Administracion\ArticuloConceptoCliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticuloConceptoCliente>
 */
class ArticuloConceptoClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticuloConceptoCliente::class);
    }

    //    /**
    //     * @return ArticuloConceptoCliente[] Returns an array of ArticuloConceptoCliente objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

       public function getArticuloConceptoClienteActivo($ente, $articulo): ?ArticuloConceptoCliente
       {
           return $this->createQueryBuilder('a')
                        ->where('a.enteComercial = :ente')
                        ->setParameter('ente', $ente)
                        ->andWhere('a.articulo = :articulo')
                        ->setParameter('articulo', $articulo)
                        ->andWhere('a.activo = :activo')
                        ->setParameter('activo', true)
                        ->getQuery()
                        ->getOneOrNullResult()
           ;

       }
}
