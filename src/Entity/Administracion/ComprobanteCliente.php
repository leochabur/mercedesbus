<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComprobanteClienteRepository::class)]

class ComprobanteCliente extends ComprobanteTransaccion
{

    #[ORM\ManyToOne(targetEntity: Cliente::class)]
    #[ORM\JoinColumn(name: 'id_cliente', referencedColumnName: 'id', nullable: true)]
    private Cliente|null $cliente = null;

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): static
    {
        $this->cliente = $cliente;

        return $this;
    }
}
