<?php

namespace App\Entity\Finanzas;

use App\Repository\Finanzas\TipoRetencionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: TipoRetencionRepository::class)]
#[UniqueEntity(
    fields: ['nombre'],
    message: 'Existe ya una retencion con este nombre.',
    errorPath: 'nombre',
)]
class TipoRetencion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Campo requerido')]
    private ?string $nombre = null;

    public function __toString()
    {
        return $this->nombre;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }
}
