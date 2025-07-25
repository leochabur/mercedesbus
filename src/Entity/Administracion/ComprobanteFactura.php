<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]

abstract class ComprobanteFactura extends ComprobanteTransaccion
{

    #[ORM\Column(name: 'punto_venta', nullable: true)]
    private ?int $puntoVenta = null;

    #[ORM\Column(nullable: true)]
    private ?float $precioTotalSinIva = null;

    #[ORM\Column(nullable: true)]
    private ?float $precioIva = null;

    #[ORM\Column(type: 'blob', name: 'documento_pdf', nullable: true)] // Define el tipo de columna como BLOB
    private $documentoPdf = null;

    #[ORM\OneToMany(targetEntity: ItemComprobante::class, mappedBy: 'comprobante', cascade: ['persist', 'remove'])]
    private $items;

    #[ORM\ManyToOne(targetEntity: TipoComprobante::class)]
    #[ORM\JoinColumn(name: 'id_tpo_comp', referencedColumnName: 'id', nullable: true)]
    private TipoComprobante|null $tipoComprobante = null;

    #[ORM\ManyToOne(targetEntity: LetraComprobante::class)]
    #[ORM\JoinColumn(name: 'id_letra', referencedColumnName: 'id', nullable: true)]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private LetraComprobante|null $identificacionComprobante = null;

    public function __toString()
    {
        return $this->tipoComprobante . '  ' .$this->identificacionComprobante . ' ' . $this->puntoVenta . ' ' . $this->getNumero();
    }

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getPuntoVenta(): ?int
    {
        return $this->puntoVenta;
    }

    public function setPuntoVenta(?int $puntoVenta): static
    {
        $this->puntoVenta = $puntoVenta;

        return $this;
    }

    public function getPrecioTotalSinIva(): ?float
    {
        return $this->precioTotalSinIva;
    }

    public function setPrecioTotalSinIva(?float $precioTotalSinIva): static
    {
        $this->precioTotalSinIva = $precioTotalSinIva;

        return $this;
    }

    public function getPrecioIva(): ?float
    {
        return $this->precioIva;
    }

    public function setPrecioIva(?float $precioIva): static
    {
        $this->precioIva = $precioIva;

        return $this;
    }

    public function getDocumentoPdf()
    {
        return $this->documentoPdf;
    }

    public function setDocumentoPdf($documentoPdf): static
    {
        $this->documentoPdf = $documentoPdf;

        return $this;
    }

    /**
     * @return Collection<int, ItemComprobante>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(ItemComprobante $item): static
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setComprobante($this);
        }

        return $this;
    }

    public function removeItem(ItemComprobante $item): static
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getComprobante() === $this) {
                $item->setComprobante(null);
            }
        }

        return $this;
    }

    public function getTipoComprobante(): ?TipoComprobante
    {
        return $this->tipoComprobante;
    }

    public function setTipoComprobante(?TipoComprobante $tipoComprobante): static
    {
        $this->tipoComprobante = $tipoComprobante;

        return $this;
    }

    public function getIdentificacionComprobante(): ?LetraComprobante
    {
        return $this->identificacionComprobante;
    }

    public function setIdentificacionComprobante(?LetraComprobante $identificacionComprobante): static
    {
        $this->identificacionComprobante = $identificacionComprobante;

        return $this;
    }

}