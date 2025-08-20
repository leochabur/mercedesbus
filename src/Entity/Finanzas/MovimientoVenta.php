<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoVentaRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\ComprobanteTransaccion;

#[ORM\Entity(repositoryClass: MovimientoVentaRepository::class)]

class MovimientoVenta extends MovimientoCuenta
{

    #[ORM\ManyToOne(targetEntity: ComprobanteTransaccion::class)]
    #[ORM\JoinColumn(name:'id_comprobante', referencedColumnName: 'id')]
    private ComprobanteTransaccion|null $comprobante = null;
    

    public function getDetalleComprobante()
    {
        return $this->comprobante . '';
    }

    public function borrarComprobanteAsociado($user)
    {
        $this->comprobante->setDeletedAt(new \DateTimeImmutable());
    }

    public function getIdComprobante()
    {
        return $this->comprobante->getId();
    }


    public function getTipo()
    {
        return 'V';
    }

    public function getImporteFactura()
    {
        return $this->getImporte();
    }

    public function getImportePago()
    {
        
    }

    public function getComprobante(): ?ComprobanteTransaccion
    {
        return $this->comprobante;
    }

    public function setComprobante(?ComprobanteTransaccion $comprobante): static
    {
        $this->comprobante = $comprobante;

        return $this;
    }



}
