<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MovimientoCuentaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

#[ORM\Entity(repositoryClass: MovimientoCuentaRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name:'discr', type:'string')]
#[ORM\DiscriminatorMap(['MCTA' => MovimientoCuenta::class, 'MVTA' => MovimientoVenta::class, 'MPAY' => MovimientoPago::class ])]
#[ORM\Table(name:'finanzas_mov_ctas_ctes')]
#[Gedmo\SoftDeleteable(fieldName: "deletedAt", timeAware: false, hardDelete: false)] 

abstract class MovimientoCuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $importe = null;

    #[ORM\Column]
    private ?bool $activo = true;

    #[ORM\Column(length: 255)]
    private ?string $detalle = null;

    // Campo para el borrado suave
    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    #[Gedmo\Timestampable(on: 'change', field: 'deletedAt')] // Opcional: Para actualizar deletedAt si se cambia
    private ?\DateTimeImmutable $deletedAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaAlta = null;

    #[ORM\ManyToOne(targetEntity: CtaCte::class, inversedBy: 'movimientos')]
    #[ORM\JoinColumn(name:'id_ctacte', referencedColumnName: 'id')]
    private CtaCte|null $ctaCte = null;

    public abstract function borrarComprobanteAsociado($user);

    abstract public function getTipo();

    abstract public function getIdComprobante(); 

    abstract public function getDetalleComprobante();


    public function getImporteFactura()
    {}
    public function getImportePago()
    {

    }

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

    public function isActivo(): ?bool
    {
        return $this->activo;
    }

    public function setActivo(bool $activo): static
    {
        $this->activo = $activo;

        return $this;
    }

    public function getDetalle(): ?string
    {
        return $this->detalle;
    }

    public function setDetalle(string $detalle): static
    {
        $this->detalle = $detalle;

        return $this;
    }

    public function getFechaAlta(): ?\DateTimeInterface
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(\DateTimeInterface $fechaAlta): static
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    public function getCtaCte(): ?CtaCte
    {
        return $this->ctaCte;
    }

    public function setCtaCte(?CtaCte $ctaCte): static
    {
        $this->ctaCte = $ctaCte;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): static
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}
