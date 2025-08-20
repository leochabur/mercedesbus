<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoCancelacionReciboRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetodoCancelacionReciboRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap(['MCR' => MetodoCancelacionRecibo::class, 'MR' => MetodoRetencion::class, 'MEE' => MetodoEfectivo::class, 'MET' => MetodoTransferencia::class, 'MEC' => MetodoCheque::class, 'MECP' => MetodoChequePropio::class, 'MECC' => MetodoChequeCartera::class])]
#[ORM\Table(name: 'finanzas_metodo_pago_recibo')]

abstract class MetodoCancelacionRecibo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $eliminado = false;

    #[ORM\Column]
    #[Assert\NotNull(message: 'El importe es requerido')]
    private ?float $importe = null;

    #[ORM\ManyToOne(targetEntity: Recibo::class, inversedBy: 'metodos')]
    #[ORM\JoinColumn(name: 'id_recibo', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'El recibo es requerido')]
    private Recibo|null $recibo = null;

    public abstract function getTipo();

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

    public function isEliminado(): ?bool
    {
        return $this->eliminado;
    }

    public function setEliminado(bool $eliminado): static
    {
        $this->eliminado = $eliminado;

        return $this;
    }
}
