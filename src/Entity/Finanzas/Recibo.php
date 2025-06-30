<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\ReciboRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\ComprobanteTransaccion;

#[ORM\Entity(repositoryClass: ReciboRepository::class)]

class Recibo extends ComprobanteTransaccion
{


    #[ORM\OneToMany(targetEntity: MetodoCancelacionRecibo::class, mappedBy: 'recibo', cascade: ['persist', 'remove'])]
    private $metodos;

    #[ORM\OneToOne(targetEntity: MovimientoCuenta::class, mappedBy: 'recibo')]
    private MovimientoCuenta|null $movimiento = null;

    public function getMovimiento(): ?MovimientoCuenta
    {
        return $this->movimiento;
    }

    public function setMovimiento(?MovimientoCuenta $movimiento): static
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
}
