<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComprobanteProveedorRepository::class)]

class ComprobanteProveedor extends ComprobanteFactura
{

}
