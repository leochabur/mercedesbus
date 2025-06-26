<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoPagoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovimientoPagoRepository::class)]

class MovimientoPago extends MovimientoCuenta
{

    #[ORM\OneToOne(targetEntity: Recibo::class, inversedBy: 'movimiento')]
    #[ORM\JoinColumn(name: 'id_recibo', referencedColumnName: 'id', nullable: true)]
    private Recibo|null $recibo = null;

}
