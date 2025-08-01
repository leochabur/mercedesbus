<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoChequeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MetodoChequeRepository::class)]
class MetodoCheque extends MetodoCancelacionRecibo
{


    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotNull(message: 'El numero de cheque es requerido')]
    private ?string $numeroCheque = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: 'La fecha de pago es requerida')]
    private ?\DateTimeInterface $fechaPago = null;

    #[ORM\Column]
    private ?bool $delCliente = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $librador = null;

    #[ORM\ManyToOne(targetEntity: Banco::class)]
    #[ORM\JoinColumn(name: 'id_banco', referencedColumnName: 'id', nullable: true)]
    #[Assert\NotNull(message: 'El banco es requerido')]
    private Banco|null $banco = null;

    #[ORM\Column]
    private ?bool $entregado = false;

    public function __toString()
    {
        $recibo = $this->getRecibo();
        $movimiento = $recibo->getMovimiento();
        $ctacte = $movimiento->getCtaCte();

        $titular = $ctacte->getTitular();

        return 'Nº Cheque: ' . $this->numeroCheque . '  -  Banco: ' . $this->banco->getNombre() . '  -  Titular: ' . $titular ;  
    
    }

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

    public function isEntregado(): ?bool
    {
        return $this->entregado;
    }

    public function setEntregado(bool $entregado): static
    {
        $this->entregado = $entregado;

        return $this;
    }
}
