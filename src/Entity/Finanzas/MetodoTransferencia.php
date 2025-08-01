<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoTransferenciaRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetodoTransferenciaRepository::class)]

class MetodoTransferencia extends MetodoCancelacionRecibo
{

    #[ORM\ManyToOne(targetEntity: CtaCteBanco::class)]
    #[ORM\JoinColumn(name:'id_ctacte_bco', referencedColumnName: 'id', nullable: true)]
    #[Assert\NotNull(message: 'La cuenta corriente es requerida')]
    private CtaCteBanco|null $ctacte = null;


    public function getTipo()
    {
        return 'Transferencia Bancaria';
    }

    public function __toString()
    {
        return 'Cta: ' . $this->ctacte . ' - Banco: ' . $this->ctacte->getBanco();
    }

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
