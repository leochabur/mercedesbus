<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\MetodoEfectivoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MetodoEfectivoRepository::class)]

class MetodoEfectivo extends MetodoCancelacionRecibo
{

}
