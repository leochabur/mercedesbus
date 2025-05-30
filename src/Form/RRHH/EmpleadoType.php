<?php

namespace App\Form\RRHH;

use App\Entity\RRHH\Empleado;
use App\Entity\RRHH\PuestoTrabajo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('apellido')
            ->add('nombre')
            ->add('legajo')
            ->add('direccion')
            ->add('telefono')
            ->add('cuil')
            ->add('dni')
            ->add('fechaIngreso', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('puestoTrabajo', EntityType::class, [
                'class' => PuestoTrabajo::class,
                'choice_label' => 'nombre',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Empleado::class,
        ]);
    }
}
