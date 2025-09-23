<?php

namespace App\Form\Finanzas;

use App\Entity\Administracion\ComprobanteFactura;
use App\Entity\Finanzas\MovimientoFacturaRecibo;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovimientoFacturaReciboType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe')
            ->add('recibo', EntityType::class, [
                'class' => Recibo::class,
                'choice_label' => 'id',
            ])
            ->add('comprobanteFactura', EntityType::class, [
                'class' => ComprobanteFactura::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MovimientoFacturaRecibo::class,
        ]);
    }
}
