<?php

namespace App\Form\Finanzas;

use App\Entity\Administracion\EnteComercial;
use App\Entity\Finanzas\CtaCte;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtaCteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tipo')
            ->add('importeFacturas')
            ->add('importePagos')
            ->add('titular', EntityType::class, [
                'class' => EnteComercial::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CtaCte::class,
        ]);
    }
}
