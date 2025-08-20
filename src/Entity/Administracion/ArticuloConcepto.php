<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ArticuloConceptoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ArticuloConceptoRepository::class)]
#[ORM\Table(name: 'admin_articulos_conceptos')]
#[UniqueEntity(
    fields: ['nombre'],
    message: 'Existe ya un articulo con ese nombre',
    errorPath: 'nombre',
)]
class ArticuloConcepto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?bool $activo = true;

    #[ORM\Column(type: 'float', nullable: true)]
    #[Assert\NotNull(message: 'Campo requerido')]
    private ?float $alicuotaIva = null;

    #[ORM\Column]
    private ?int $circuito = null; //1 Ventas - 2 Compras - 3 Todos

    public function getCircuitoText()
    {   
        if ($this->circuito == 1)
        {
            return "Ventas";
        }
        elseif ($this->circuito == 2)
        {
            return "Compras";
        }

        return "Compras / Ventas";
    }

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


    public function getAlicuotaIva(): ?float
    {
        return $this->alicuotaIva;
    }

    public function setAlicuotaIva(float $alicuotaIva): static
    {
        $this->alicuotaIva = $alicuotaIva;

        return $this;
    }
}
