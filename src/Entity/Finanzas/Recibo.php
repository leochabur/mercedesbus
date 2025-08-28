<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\ReciboRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\ComprobanteTransaccion;


#[ORM\Entity(repositoryClass: ReciboRepository::class)]

class Recibo extends ComprobanteTransaccion
{
    #[ORM\OneToMany(targetEntity: MetodoCancelacionRecibo::class, mappedBy: 'recibo', cascade: ['persist', 'remove'])]
    private $metodos;

    #[ORM\OneToMany(targetEntity: MovimientoFacturaRecibo::class, mappedBy: 'recibo', cascade: ['persist', 'remove'])]   
    private $movimientosFacturas;   

    #[ORM\OneToOne(targetEntity: MovimientoPago::class, mappedBy: 'recibo')]
    private MovimientoPago|null $movimiento = null;

    #[ORM\Column(nullable: true)]
    private ?float $montoAplicado = 0;

    public function isAplicable()
    {
        if (round($this->montoAplicado,2) < round($this->getPrecioTotalConIva(),2))
        {
            return $this->getId();
        }

        return false;

    }

     public function getDiasDeMora()
     {
        return ;
     }

    public function getMontoPendiente()
    {
        return ($this->getPrecioTotalConIva() - $this->montoAplicado);
    }


    public function getSaldoPendienteDeAplicar()
    {

        return ($this->getPrecioTotalConIva() - ($this->montoAplicado ? $this->montoAplicado : 0));
    }


    
    public function __toString()
    {
        return 'Recibo';//$this->getNumero();
    }

    public function __construct()
    {
        $this->metodos = new ArrayCollection();
        $this->movimientosFacturas = new ArrayCollection();
    }

    public function getMovimiento(): ?MovimientoPago
    {
        return $this->movimiento;
    }

    public function setMovimiento(?MovimientoPago $movimiento): static
    {
        // unset the owning side of the relation if necessary
        if ($movimiento === null && $this->movimiento !== null) {
            $this->movimiento->setRecibo(null);
        }

        // set the owning side of the relation if necessary
        if ($movimiento !== null && $movimiento->getRecibo() !== $this) {
            $movimiento->setRecibo($this);
        }

        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * @return Collection<int, MetodoCancelacionRecibo>
     */
    public function getMetodos(): Collection
    {
        return $this->metodos;
    }

    public function addMetodo(MetodoCancelacionRecibo $metodo): static
    {
        if (!$this->metodos->contains($metodo)) {
            $this->metodos->add($metodo);
            $metodo->setRecibo($this);
        }

        return $this;
    }

    public function removeMetodo(MetodoCancelacionRecibo $metodo): static
    {
        if ($this->metodos->removeElement($metodo)) {
            // set the owning side to null (unless already changed)
            if ($metodo->getRecibo() === $this) {
                $metodo->setRecibo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MovimientoFacturaRecibo>
     */
    public function getMovimientosFacturas(): Collection
    {
        return $this->movimientosFacturas;
    }

    public function addMovimientosFactura(MovimientoFacturaRecibo $movimientosFactura): static
    {
        if (!$this->movimientosFacturas->contains($movimientosFactura)) {
            $this->movimientosFacturas->add($movimientosFactura);
            $movimientosFactura->setRecibo($this);
        }

        return $this;
    }

    public function removeMovimientosFactura(MovimientoFacturaRecibo $movimientosFactura): static
    {
        if ($this->movimientosFacturas->removeElement($movimientosFactura)) {
            // set the owning side to null (unless already changed)
            if ($movimientosFactura->getRecibo() === $this) {
                $movimientosFactura->setRecibo(null);
            }
        }

        return $this;
    }

    public function getMontoAplicado(): ?float
    {
        return $this->montoAplicado;
    }

    public function setMontoAplicado(?float $montoAplicado): static
    {
        $this->montoAplicado = $montoAplicado;

        return $this;
    }
}
