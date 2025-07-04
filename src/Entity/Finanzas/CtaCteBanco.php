<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\CtaCteBancoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CtaCteBancoRepository::class)]
#[ORM\Table(name: 'finanzas_ctas_ctes_banco')]

class CtaCteBanco
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numero = null;

    #[ORM\Column]
    private ?bool $liberaValores = null;

    #[ORM\ManyToOne(targetEntity: Banco::class)]
    #[ORM\JoinColumn(name: 'id_banco', referencedColumnName: 'id')]
    private Banco|null $banco = null;

    public function __toString()
    {
        return $this->numero . "  -  (" . $this->banco . ")";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function isLiberaValores(): ?bool
    {
        return $this->liberaValores;
    }

    public function setLiberaValores(bool $liberaValores): static
    {
        $this->liberaValores = $liberaValores;

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
