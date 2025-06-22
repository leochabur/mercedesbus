<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoVentaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovimientoVentaRepository::class)]

class MovimientoVenta extends MovimientoCuenta
{

}
