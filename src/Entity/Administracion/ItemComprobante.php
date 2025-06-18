<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ItemComprobanteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemComprobanteRepository::class)]
#[ORM\Table(name: 'admin_items_comprobante')]

class ItemComprobante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $cantidad = null;

    #[ORM\Column]
    private ?float $precioUnitario = null;

    #[ORM\Column]
    private ?float $precioTotal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\ManyToOne(targetEntity: ArticuloConcepto::class)]
    #[ORM\JoinColumn(name: 'id_articulo', referencedColumnName: 'id', nullable: true)]
    private ArticuloConcepto|null $articulo = null;

    #[ORM\ManyToOne(targetEntity: ComprobanteTransaccion::class, inversedBy: 'items')]
    #[ORM\JoinColumn(name: 'id_comprobante', referencedColumnName: 'id')]
    private ComprobanteTransaccion|null $comprobante = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?float
    {
        return $this->cantidad;
    }

    public function setCantidad(float $cantidad): static
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecioUnitario(): ?float
    {
        return $this->precioUnitario;
    }

    public function setPrecioUnitario(float $precioUnitario): static
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    public function getPrecioTotal(): ?float
    {
        return $this->precioTotal;
    }

    public function setPrecioTotal(float $precioTotal): static
    {
        $this->precioTotal = $precioTotal;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getArticulo(): ?ArticuloConcepto
    {
        return $this->articulo;
    }

    public function setArticulo(?ArticuloConcepto $articulo): static
    {
        $this->articulo = $articulo;

        return $this;
    }

    public function getComprobante(): ?ComprobanteTransaccion
    {
        return $this->comprobante;
    }

    public function setComprobante(?ComprobanteTransaccion $comprobante): static
    {
        $this->comprobante = $comprobante;

        return $this;
    }
}
