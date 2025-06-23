<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoVentaRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\ComprobanteTransaccion;

#[ORM\Entity(repositoryClass: MovimientoVentaRepository::class)]

class MovimientoVenta extends MovimientoCuenta
{

    #[ORM\ManyToOne(targetEntity: ComprobanteTransaccion::class)]
    #[ORM\JoinColumn(name: 'id_comprobante', referencedColumnName: 'id')]
    private ComprobanteTransaccion|null $comprobante = null;



}
