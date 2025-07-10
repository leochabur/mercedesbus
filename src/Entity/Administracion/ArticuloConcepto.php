<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ArticuloConceptoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticuloConceptoRepository::class)]
#[ORM\Table(name: 'admin_articulos_conceptos')]

class ArticuloConcepto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?bool $activo = true;

    #[ORM\Column]
    private ?int $circuito = null; //1 Ventas - 2 Compras - 3 Todos

    public function __toString()
    {
        return $this->nombre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

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

    public function getCircuito(): ?int
    {
        return $this->circuito;
    }

    public function setCircuito(int $circuito): static
    {
        $this->circuito = $circuito;

        return $this;
    }
}
