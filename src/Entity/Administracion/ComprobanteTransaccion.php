<?php

namespace App\Entity\Administracion;

use App\Entity\Finanzas\MovimientoVenta;
use App\Repository\Administracion\ComprobanteTransaccionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Finanzas\Recibo;


#[ORM\Entity]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap([
                        'CBTE' => ComprobanteTransaccion::class,
                        'CF' => ComprobanteFactura::class,
                        'CC' => ComprobanteCliente::class, 
                        'CP' => ComprobanteProveedor::class,
                        'RE' => Recibo::class])]
#[ORM\Table(name: 'admin_comprobantes_transaccion')]

abstract class ComprobanteTransaccion    
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La fecha es un campo requerido')]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'El numero es un campo requerido')]
    private ?int $numero = null;
    
    #[ORM\Column]
    private ?bool $visible = true; //Esto es para el caso de los recibos primero los guarda y los deja pendientes para cargar las formas de pago

    #[ORM\Column(options: ['default' => false])]
    private ?bool $eliminado = false;

    #[ORM\Column]
    private ?float $precioTotalConIva = null;

    #[ORM\Column]
    private ?bool $afectaCtaCte = true;

    #[ORM\ManyToOne(targetEntity: EnteComercial::class)]
    #[ORM\JoinColumn(name: 'id_ente_comercial', referencedColumnName: 'id')]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private EnteComercial|null $enteComercial = null;

    #[ORM\ManyToOne(targetEntity: EmpresaGrupo::class)]
    #[ORM\JoinColumn(name: 'id_empresa_grupo', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotBlank(message: 'El campo requerido')]
    private ?EmpresaGrupo $empresaGrupo = null;

    // Campo para el borrado suave
    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $deletedAt = null;
    
    #[ORM\OneToOne(targetEntity: MovimientoVenta::class, mappedBy: 'comprobante')]
    private MovimientoVenta|null $movimientoVenta = null;


    public abstract function getMontoPendiente();

    public abstract function getDiasDeMora();

    public abstract function isAplicable(); //Para el caso de las facturas devuelve false...para los Recibos devuelve si queda saldo para aplicar

    public abstract function isPagoCompleto();

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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;

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

    public function isAfectaCtaCte(): ?bool
    {
        return $this->afectaCtaCte;
    }

    public function setAfectaCtaCte(bool $afectaCtaCte): static
    {
        $this->afectaCtaCte = $afectaCtaCte;

        return $this;
    }

    public function getEnteComercial(): ?EnteComercial
    {
        return $this->enteComercial;
    }

    public function setEnteComercial(?EnteComercial $enteComercial): static
    {
        $this->enteComercial = $enteComercial;

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

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): static
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getMovimientoVenta(): ?MovimientoVenta
    {
        return $this->movimientoVenta;
    }

    public function setMovimientoVenta(?MovimientoVenta $movimientoVenta): static
    {
        // unset the owning side of the relation if necessary
        if ($movimientoVenta === null && $this->movimientoVenta !== null) {
            $this->movimientoVenta->setComprobante(null);
        }

        // set the owning side of the relation if necessary
        if ($movimientoVenta !== null && $movimientoVenta->getComprobante() !== $this) {
            $movimientoVenta->setComprobante($this);
        }

        $this->movimientoVenta = $movimientoVenta;

        return $this;
    }

    public function isEliminado(): ?bool
    {
        return $this->eliminado;
    }

    public function setEliminado(bool $eliminado): static
    {
        $this->eliminado = $eliminado;

        return $this;
    }

 


}
