<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ArticuloConceptoClienteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ArticuloConceptoClienteRepository::class)]
#[ORM\Table(name: 'admin_articulos_conceptos_clientes')]

class ArticuloConceptoCliente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $importe = null;

    #[ORM\Column]
    private ?int $cicloFacturacion = null;

    #[ORM\ManyToOne(targetEntity: EnteComercial::class)]
    #[ORM\JoinColumn(name: 'id_ente_comercial', referencedColumnName: 'id')]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private EnteComercial|null $enteComercial = null;

    #[ORM\ManyToOne(targetEntity: ArticuloConcepto::class)]
    #[ORM\JoinColumn(name: 'id_articulo', referencedColumnName: 'id', nullable: true)]
    private ArticuloConcepto|null $articulo = null;

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

    public function getCicloFacturacion(): ?int
    {
        return $this->cicloFacturacion;
    }

    public function setCicloFacturacion(int $cicloFacturacion): static
    {
        $this->cicloFacturacion = $cicloFacturacion;

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

    public function getArticulo(): ?ArticuloConcepto
    {
        return $this->articulo;
    }

    public function setArticulo(?ArticuloConcepto $articulo): static
    {
        $this->articulo = $articulo;

        return $this;
    }
}
