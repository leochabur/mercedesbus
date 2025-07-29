<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ComprobanteClienteRepository::class)]

class ComprobanteCliente extends ComprobanteFactura
{


}
