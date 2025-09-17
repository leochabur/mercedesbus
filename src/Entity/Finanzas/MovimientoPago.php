<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoPagoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovimientoPagoRepository::class)]

class MovimientoPago extends MovimientoCuenta
{

    #[ORM\OneToOne(targetEntity: Recibo::class, inversedBy: 'movimiento')]
    #[ORM\JoinColumn(name:'id_recibo', referencedColumnName: 'id', nullable: true)]
    private Recibo|null $recibo = null;

    public function isPagoCompleto()
    {
        return $this->recibo->isPagoCompleto();
    }
    public function getDetalleComprobante()
    {
        return $this->recibo . '';
    }

    public function borrarComprobanteAsociado($user)
    {
        $this->recibo->setDeletedAt(new \DateTimeImmutable());
        foreach ($this->recibo->getMetodos() as $metodo)
        {
            $metodo->setEliminado(true);
        }

    }
    
    public function getIdComprobante()
    {
        return $this->getRecibo()->getId();
    }


    public function getTipo()
    {
        return 'P';
    }

    public function getImporteFactura()
    {

    }

    public function getImportePago()
    {
        return $this->getImporte();
    }

    public function getRecibo(): ?Recibo
    {
        return $this->recibo;
    }

    public function setRecibo(?Recibo $recibo): static
    {
        $this->recibo = $recibo;

        return $this;
    }

}
