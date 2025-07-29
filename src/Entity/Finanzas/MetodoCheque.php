<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoChequeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MetodoChequeRepository::class)]
class MetodoCheque extends MetodoCancelacionRecibo
{


    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: 'El numero de cheque es requerido')]
    private ?string $numeroCheque = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La fecha de pago es requerida')]
    private ?\DateTimeInterface $fechaPago = null;

    #[ORM\Column]
    private ?bool $delCliente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $librador = null;

    #[ORM\ManyToOne(targetEntity: Banco::class)]
    #[ORM\JoinColumn(name: 'id_banco', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'El banco es requerido')]
    private Banco|null $banco = null;

    public function getNumeroCheque(): ?string
    {
        return $this->numeroCheque;
    }

    public function setNumeroCheque(string $numeroCheque): static
    {
        $this->numeroCheque = $numeroCheque;

        return $this;
    }

    public function getFechaPago(): ?\DateTimeInterface
    {
        return $this->fechaPago;
    }

    public function setFechaPago(?\DateTimeInterface $fechaPago): static
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    public function isDelCliente(): ?bool
    {
        return $this->delCliente;
    }

    public function setDelCliente(bool $delCliente): static
    {
        $this->delCliente = $delCliente;

        return $this;
    }

    public function getLibrador(): ?string
    {
        return $this->librador;
    }

    public function setLibrador(?string $librador): static
    {
        $this->librador = $librador;

        return $this;
    }

    public function getBanco(): ?Banco
    {
        return $this->banco;
    }

    public function setBanco(?Banco $banco): static
    {
        $this->banco = $banco;

        return $this;
    }
}
