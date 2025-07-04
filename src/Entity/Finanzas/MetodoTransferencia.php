<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoTransferenciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetodoTransferenciaRepository::class)]

class MetodoTransferencia extends MetodoCancelacionRecibo
{

    #[ORM\ManyToOne(targetEntity: CtaCteBanco::class)]
    #[ORM\JoinColumn(name:'id_caja', referencedColumnName: 'id')]
    private CtaCteBanco|null $ctacte = null;

    public function getCtacte(): ?CtaCteBanco
    {
        return $this->ctacte;
    }

    public function setCtacte(?CtaCteBanco $ctacte): static
    {
        $this->ctacte = $ctacte;

        return $this;
    }


}
