<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoChequeCarteraRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetodoChequeCarteraRepository::class)]

class MetodoChequeCartera extends MetodoCancelacionRecibo
{

    #[ORM\ManyToOne(targetEntity: MetodoCheque::class)]
    #[ORM\JoinColumn(name: 'ic_cheque_cartera', referencedColumnName: 'id', nullable:true)]
    private MetodoCheque|null $chequeCartera = null;

    public function getChequeCartera(): ?MetodoCheque
    {
        return $this->chequeCartera;
    }

    public function setChequeCartera(?MetodoCheque $chequeCartera): static
    {
        $this->chequeCartera = $chequeCartera;

        return $this;
    }

}
