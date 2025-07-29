<?php

namespace App\Entity\Administracion;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap(['ENTE' => EnteComercial::class, 'CLI' => Cliente::class, 'PRO' => Proveedor::class, 'EG' => EmpresaGrupo::class])]
#[ORM\Table(name: 'admin_entes_comerciales')]

class EnteComercial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, name: 'razon_social')]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private ?string $razonSocial = null;

    #[ORM\Column(nullable: true, type: Types::BIGINT)]
    private $cuit = null;

    #[ORM\Column]
    private ?bool $activo = true;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $direccion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mail = null;

    #[ORM\ManyToOne(targetEntity: RespIva::class)]
    #[ORM\JoinColumn(name: 'id_resp_iva', referencedColumnName: 'id')]
    private RespIva|null $respIva = null;

    public function getCode()
    {
        
    }

    public function __toString()
    {
        return strtoupper($this->razonSocial);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(string $razonSocial): static
    {
        $this->razonSocial = $razonSocial;

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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getRespIva(): ?RespIva
    {
        return $this->respIva;
    }

    public function setRespIva(?RespIva $respIva): static
    {
        $this->respIva = $respIva;

        return $this;
    }

    public function getCuit()
    {
        return $this->cuit;
    }

    public function setCuit($cuit): static
    {
        $this->cuit = $cuit;

        return $this;
    }
}
