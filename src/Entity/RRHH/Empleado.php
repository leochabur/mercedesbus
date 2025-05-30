<?php

namespace App\Entity\RRHH;

use App\Repository\RRHH\EmpleadoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EmpleadoRepository::class)]
#[ORM\Table(name: 'rrhh_empleados')]
class Empleado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message : 'Campo requerido')]
    private ?string $apellido = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message : 'Campo requerido')]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $legajo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $direccion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telefono = null;

    #[ORM\Column( nullable: true)]
    private ?int $cuil = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotNull(message : 'Campo requerido')]
    private ?int $dni = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaIngreso = null;

    #[ORM\ManyToOne(targetEntity: PuestoTrabajo::class)]
    #[ORM\JoinColumn(name: 'id_puesto', referencedColumnName: 'id')]
    private PuestoTrabajo|null $puestoTrabajo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): static
    {
        $this->apellido = $apellido;

        return $this;
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

    public function getLegajo(): ?int
    {
        return $this->legajo;
    }

    public function setLegajo(int $legajo): static
    {
        $this->legajo = $legajo;

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

    public function getCuil(): ?int
    {
        return $this->cuil;
    }

    public function setCuil(?int $cuil): static
    {
        $this->cuil = $cuil;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(?int $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(?\DateTimeInterface $fechaIngreso): static
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    public function getPuestoTrabajo(): ?PuestoTrabajo
    {
        return $this->puestoTrabajo;
    }

    public function setPuestoTrabajo(?PuestoTrabajo $puestoTrabajo): static
    {
        $this->puestoTrabajo = $puestoTrabajo;

        return $this;
    }
}
