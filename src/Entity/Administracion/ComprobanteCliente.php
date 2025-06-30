<?php

namespace App\Entity\Administracion;

use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ComprobanteClienteRepository::class)]

class ComprobanteCliente extends ComprobanteTransaccion
{

    #[Assert\IsTrue(message: 'Debe cargar al menos un item')]
    public function isItemLoad(): bool
    {
        return $this->getItems()->count() > 0;
    }


    public function updateValues()
    {
        $total = 0;
        foreach ($this->getItems() as $it) 
        {
            $it->setPrecioTotal($it->getCantidad() * $it->getPrecioUnitario());
            $total+= $it->getPrecioTotal();
        }
        $this->setPrecioTotalSinIva($total);
        $this->setPrecioIva(($total * 0.105));
        $this->setPrecioTotalConIva(($total * 1.105));
    }
}
