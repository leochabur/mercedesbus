<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoFacturaReciboRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\ComprobanteFactura; 

#[ORM\Entity(repositoryClass: MovimientoFacturaReciboRepository::class)]
#[ORM\Table(name: 'finanzas_movimiento_factura_recibo')]

class MovimientoFacturaRecibo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $importe = null;

    #[ORM\ManyToOne(targetEntity: Recibo::class, inversedBy: 'movimientosFacturas')]
    #[ORM\JoinColumn(name: 'id_recibo', referencedColumnName: 'id')]
    private Recibo|null $recibo = null;

    #[ORM\ManyToOne(targetEntity: ComprobanteFactura::class)]
    #[ORM\JoinColumn(name: 'id_comprobante', referencedColumnName: 'id')]
    private ComprobanteFactura|null $comprobanteFactura = null; 

    public function getRecibo(): ?Recibo
    {
        return $this->recibo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImporte(): ?float
    {
        return $this->importe;
    }

    public function setImporte(float $importe): static
    {
        $this->importe = $importe;

        return $this;
    }

    public function setRecibo(?Recibo $recibo): static
    {
        $this->recibo = $recibo;

        return $this;
    }

    public function getComprobanteFactura(): ?ComprobanteFactura
    {
        return $this->comprobanteFactura;
    }

    public function setComprobanteFactura(?ComprobanteFactura $comprobanteFactura): static
    {
        $this->comprobanteFactura = $comprobanteFactura;

        return $this;
    }
}
