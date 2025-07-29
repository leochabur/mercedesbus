<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProveedorRepository::class)]

class Proveedor extends EnteComercial
{
    public function getCode()
    {
        return 'p';
    }
}
