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

    #[ORM\OneToOne(targetEntity: MovimientoPago::class, mappedBy: 'recibo')]
    private MovimientoPago|null $movimiento = null;

    public function __construct()
    {
        $this->metodos = new ArrayCollection();
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
}
