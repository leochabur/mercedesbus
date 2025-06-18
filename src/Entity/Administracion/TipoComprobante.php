<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\TipoComprobanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoComprobanteRepository::class)]
#[ORM\Table(name: 'admin_tipos_comprobante')]

class TipoComprobante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo = null;

    #[ORM\Column]
    private ?bool $activo = true;

    #[ORM\Column]
    private ?bool $requiereInfoCompleta = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function isActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): static
    {
        $this->activo = $activo;

        return $this;
    }

    public function isRequiereInfoCompleta(): ?bool
    {
        return $this->requiereInfoCompleta;
    }

    public function setRequiereInfoCompleta(bool $requiereInfoCompleta): static
    {
        $this->requiereInfoCompleta = $requiereInfoCompleta;

        return $this;
    }
}
