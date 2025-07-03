<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoCancelacionReciboRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetodoCancelacionReciboRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap(['MCR' => MetodoCancelacionRecibo::class, 'MEE' => MetodoEfectivo::class ])]
#[ORM\Table(name: 'finanzas_metodo_pago_recibo')]

abstract class MetodoCancelacionRecibo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $importe = null;

    #[ORM\ManyToOne(targetEntity: Recibo::class, inversedBy: 'metodos')]
    #[ORM\JoinColumn(name: 'id_recibo', referencedColumnName: 'id')]
    private Recibo|null $recibo = null;

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
