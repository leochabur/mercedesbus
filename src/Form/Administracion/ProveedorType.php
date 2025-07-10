<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\Proveedor;
use App\Entity\Administracion\RespIva;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('razonSocial')
            ->add('cuit')
            ->add('activo')
            ->add('direccion')
            ->add('telefono')
            ->add('mail')
            ->add('respIva', EntityType::class, [
                'class' => RespIva::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proveedor::class,
        ]);
    }
}
