<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoEfectivoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetodoEfectivoRepository::class)]

class MetodoEfectivo extends MetodoCancelacionRecibo
{

    #[ORM\ManyToOne(targetEntity: Caja::class)]
    #[ORM\JoinColumn(name:'id_caja', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'La caja es requerida')]
    private Caja|null $caja = null;

    public function getCaja(): ?Caja
    {
        return $this->caja;
    }

    public function setCaja(?Caja $caja): static
    {
        $this->caja = $caja;

        return $this;
    }
}
