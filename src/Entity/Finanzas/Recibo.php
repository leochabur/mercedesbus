<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\ReciboRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReciboRepository::class)]

class Recibo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fecha = null;

    #[ORM\Column]
    private ?float $importe = null;

    #[ORM\OneToOne(targetEntity: MovimientoCuenta::class, mappedBy: 'recibo')]
    private MovimientoCuenta|null $movimiento = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    public function setFecha(\DateTime $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
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
}
