<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\CtaCteRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Administracion\EnteComercial;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CtaCteRepository::class)]
#[ORM\Table(name: 'finanzas_ctas_ctes')]
#[UniqueEntity(
    fields: ['titular'],
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

    #[ORM\OneToMany(targetEntity: MovimientoCuenta::class, mappedBy: 'ctaCte', cascade: ['persist', 'remove'])]
    private $movimientos;

    public function getId(): ?int
    {
        return $this->id;
    }
}
