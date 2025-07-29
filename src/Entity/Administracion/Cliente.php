<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ClienteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClienteRepository::class)]

class Cliente extends EnteComercial
{

    public function getCode()
    {
        return 'c';
    }

}
