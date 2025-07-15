<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\EmpresaGrupoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpresaGrupoRepository::class)]

class EmpresaGrupo  extends EnteComercial
{

}
