<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoRetencionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MetodoRetencionRepository::class)]

class MetodoRetencion extends MetodoCancelacionRecibo
{

    #[ORM\ManyToOne(targetEntity: TipoRetencion::class)]
    #[ORM\JoinColumn(name:'id_tipo_retencion', referencedColumnName: 'id')]
    #[Assert\NotNull(message: 'La retencion es requerida')]
    private TipoRetencion|null $tipoRetencion = null;

    public function getTipo()
    {
        return 'Retencion';
    }

    public function __toString()
    {
        return $this->tipoRetencion . '';
    }


    public function getTipoRetencion(): ?TipoRetencion
    {
        return $this->tipoRetencion;
    }

    public function setTipoRetencion(?TipoRetencion $tipoRetencion): static
    {
        $this->tipoRetencion = $tipoRetencion;

        return $this;
    }


}
