<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\CtaCteBanco;
use App\Entity\Finanzas\MetodoChequePropio;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetodoChequePropioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe')
            ->add('numeroCheque')
            ->add('fechaPago', DateType::class , [
                'widget' => 'single_text',
            ])
            ->add('ctaCteBanco', EntityType::class, [
                'class' => CtaCteBanco::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MetodoChequePropio::class,
        ]);
    }
}
