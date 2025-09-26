<?php

namespace App\Repository\Administracion;

use App\Entity\Administracion\ComprobanteCliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ComprobanteCliente>
 */
class ComprobanteClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComprobanteCliente::class);
    }

       /**
        * @return ComprobanteCliente[] Returns an array of ComprobanteCliente objects
        */
       public function proximosItemsAFacturar($ente): array
       {        


            $dql = "SELECT ec.razonSocial AS nombre_cliente, 
                   IDENTITY(it.articulo) AS articulo_id
                    FROM App\Entity\Administracion\ComprobanteCliente c
                    JOIN c.items it
                    JOIN it.articulo a
                    JOIN a.importes ac
                    JOIN c.enteComercial ec
                    WHERE c.fecha IN (
                        SELECT MAX(c2.fecha)
                        FROM App\Entity\Administracion\ComprobanteCliente c2
                        GROUP BY c2.enteComercial
                    )
                    AND DATE_ADD(c.fecha, ac.cicloFacturacion, 'day') <= :fechaActual
                    GROUP BY c.enteComercial, articulo_id";
                

            $filter = ($ente ? " AND ec = :ente " : "");

            $dql = "SELECT MAX(c.fecha) AS fecha_ultimo_comprobante, ac.cicloFacturacion, ec.razonSocial AS nombre_cliente, a.nombre as articulo
                    FROM App\Entity\Administracion\ComprobanteCliente c
                    JOIN c.items it
                    JOIN it.articulo a
                    JOIN a.importes ac
                    JOIN c.enteComercial ec
                    WHERE ac.activo = :activo AND (ec = ac.enteComercial) $filter
                    GROUP BY ec, ac
                    ORDER BY ec.razonSocial, a.nombre";

                    $query = $this->getEntityManager()->createQuery($dql)
                                  
                              ->setParameter('activo', true);
                    if ($ente)
                    {
                        $query->setParameter('ente', $ente);
                    }
                  //  $query->setParameter('fechaActual', new \DateTime());

                    return $query->getResult();

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
