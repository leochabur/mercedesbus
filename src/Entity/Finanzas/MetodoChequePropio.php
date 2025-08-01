<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoChequePropioRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetodoChequePropioRepository::class)]
class MetodoChequePropio extends MetodoCancelacionRecibo
{

    #[ORM\Column]
    private ?bool $acreditado = false;

    #[ORM\ManyToOne(targetEntity: CtaCteBanco::class)]
    #[ORM\JoinColumn(name: 'id_ctacte_bco', referencedColumnName: 'id', nullable:true)]
    private CtaCteBanco|null $ctaCteBanco = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: 'La fecha de pago es requerida')]
    private ?\DateTimeInterface $fechaPago = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotNull(message: 'El numero de cheque es requerido')]
    private ?string $numeroCheque = null;

    public function getCtaCteBanco(): ?CtaCteBanco
    {
        return $this->ctaCteBanco;
    }

    public function setCtaCteBanco(?CtaCteBanco $ctaCteBanco): static
    {
        $this->ctaCteBanco = $ctaCteBanco;

        return $this;
    }

    public function isAcreditado(): ?bool
    {
        return $this->acreditado;
    }

    public function setAcreditado(bool $acreditado): static
    {
        $this->acreditado = $acreditado;

        return $this;
    }

    public function getFechaPago(): ?\DateTime
    {
        return $this->fechaPago;
    }

    public function setFechaPago(?\DateTime $fechaPago): static
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    public function getNumeroCheque(): ?string
    {
        return $this->numeroCheque;
    }

    public function setNumeroCheque(?string $numeroCheque): static
    {
        $this->numeroCheque = $numeroCheque;

        return $this;
    }
}
