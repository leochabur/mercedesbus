<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ArticuloConceptoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(targetEntity: ArticuloConceptoCliente::class, mappedBy: 'articulo')]
    private $importes;

    public function __construct()
    {
        $this->importes = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ArticuloConcepto>
     */
    public function getImportes(): Collection
    {
        return $this->importes;
    }

    public function addImporte(ArticuloConcepto $importe): static
    {
        if (!$this->importes->contains($importe)) {
            $this->importes->add($importe);
            $importe->setArticulo($this);
        }

        return $this;
    }

    public function removeImporte(ArticuloConcepto $importe): static
    {
        if ($this->importes->removeElement($importe)) {
            // set the owning side to null (unless already changed)
            if ($importe->getArticulo() === $this) {
                $importe->setArticulo(null);
            }
        }

        return $this;
    }
}
