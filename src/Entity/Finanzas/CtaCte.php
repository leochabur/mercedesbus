<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\CtaCteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\EnteComercial;
use App\Entity\Administracion\EmpresaGrupo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CtaCteRepository::class)]
#[ORM\Table(name: 'finanzas_ctas_ctes')]
#[UniqueEntity(
    fields: ['titular', 'empresaGrupo'],
    message: 'Existe una cuenta corriente para el titular ingresado.',
    errorPath: 'titular',
)]

class CtaCte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1)]
    private ?string $tipo = null;  /// C = Cliente - P = Proveedor

    #[ORM\ManyToOne(targetEntity: EnteComercial::class)]
    #[ORM\JoinColumn(name: 'id_titular', referencedColumnName: 'id')]
    private EnteComercial|null $titular = null;

    #[ORM\ManyToOne(targetEntity: EmpresaGrupo::class)]
    #[ORM\JoinColumn(name: 'id_empresa_grupo', referencedColumnName: 'id')]
    private ?EmpresaGrupo $empresaGrupo = null;

    #[ORM\OneToMany(targetEntity: MovimientoCuenta::class, mappedBy: 'ctaCte', cascade: ['persist', 'remove'])]
    #[ORM\OrderBy(["fechaAlta" => "ASC"])]
    private $movimientos;

    #[ORM\Column]
    private ?float $importeFacturas = 0;

    #[ORM\Column]
    private ?float $importePagos = 0;

    public function updateImporte($monto, $tipo = 'P')
    {
        if ($tipo == 'P')
        {
            $this->importePagos+= $monto;
        }
        else
        {
            $this->importeFacturas+= $monto;
        }

        return $this;
    }

    public function __construct()
    {
        $this->movimientos = new ArrayCollection();
    }

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

    public function getTitular(): ?EnteComercial
    {
        return $this->titular;
    }

    public function setTitular(?EnteComercial $titular): static
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * @return Collection<int, MovimientoCuenta>
     */
    public function getMovimientos(): Collection
    {
        return $this->movimientos;
    }

    public function addMovimiento(MovimientoCuenta $movimiento): static
    {
        if (!$this->movimientos->contains($movimiento)) {
            $this->movimientos->add($movimiento);
            $movimiento->setCtaCte($this);
        }

        return $this;
    }

    public function removeMovimiento(MovimientoCuenta $movimiento): static
    {
        if ($this->movimientos->removeElement($movimiento)) {
            // set the owning side to null (unless already changed)
            if ($movimiento->getCtaCte() === $this) {
                $movimiento->setCtaCte(null);
            }
        }

        return $this;
    }

    public function getImporteFacturas(): ?float
    {
        return $this->importeFacturas;
    }

    public function setImporteFacturas(float $importeFacturas): static
    {
        $this->importeFacturas = $importeFacturas;

        return $this;
    }

    public function getImportePagos(): ?float
    {
        return $this->importePagos;
    }

    public function setImportePagos(float $importePagos): static
    {
        $this->importePagos = $importePagos;

        return $this;
    }

    public function getEmpresaGrupo(): ?EmpresaGrupo
    {
        return $this->empresaGrupo;
    }

    public function setEmpresaGrupo(?EmpresaGrupo $empresaGrupo): static
    {
        $this->empresaGrupo = $empresaGrupo;
        return $this;
    }
}
