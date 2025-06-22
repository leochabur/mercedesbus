<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteTransaccionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap(['CBTE' => ComprobanteTransaccion::class, 'CC' => ComprobanteCliente::class])]
#[ORM\Table(name: 'admin_comprobantes_transaccion')]

abstract class ComprobanteTransaccion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(name: 'punto_venta', nullable: true)]
    private ?int $puntoVenta = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private ?int $numero = null;

    #[ORM\Column(length: 1, nullable: true)]
    private ?string $letra = null;

    #[ORM\Column(type: 'blob', name: 'documento_pdf', nullable: true)] // Define el tipo de columna como BLOB
    private $documentoPdf = null;
    
    #[ORM\OneToMany(targetEntity: ItemComprobante::class, mappedBy: 'comprobante', cascade: ['persist', 'remove'])]
    private $items;

    #[ORM\Column]
    private ?float $precioTotalSinIva = null;

    #[ORM\Column]
    private ?float $precioTotalConIva = null;

    #[ORM\Column]
    private ?float $precioIva = null;

    #[ORM\ManyToOne(targetEntity: TipoComprobante::class)]
    #[ORM\JoinColumn(name: 'id_tpo_comp', referencedColumnName: 'id')]
    private TipoComprobante|null $tipoComprobante = null;

    #[ORM\ManyToOne(targetEntity: LetraComprobante::class)]
    #[ORM\JoinColumn(name: 'id_letra', referencedColumnName: 'id')]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private LetraComprobante|null $identificacionComprobante = null;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getLetra(): ?string
    {
        return $this->letra;
    }

    public function setLetra(?string $letra): static
    {
        $this->letra = $letra;

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

    public function getDocumentoPdf()
    {
        return $this->documentoPdf;
    }

    public function setDocumentoPdf($documentoPdf): static
    {
        $this->documentoPdf = $documentoPdf;

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

    public function getPrecioTotalSinIva(): ?float
    {
        return $this->precioTotalSinIva;
    }

    public function setPrecioTotalSinIva(float $precioTotalSinIva): static
    {
        $this->precioTotalSinIva = $precioTotalSinIva;

        return $this;
    }

    public function getPrecioTotalConIva(): ?float
    {
        return $this->precioTotalConIva;
    }

    public function setPrecioTotalConIva(float $precioTotalConIva): static
    {
        $this->precioTotalConIva = $precioTotalConIva;

        return $this;
    }

    public function getPrecioIva(): ?float
    {
        return $this->precioIva;
    }

    public function setPrecioIva(float $precioIva): static
    {
        $this->precioIva = $precioIva;

        return $this;
    }


}
