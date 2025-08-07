<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\MetodoRetencion;
use App\Entity\Finanzas\Recibo;
use App\Entity\Finanzas\TipoRetencion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType; 

class MetodoRetencionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe',
                    NumberType::class, 
                    [
                        'label' => 'Importe',
                        'scale' => 2, 
                        'html5' => true, 
                        'attr' => [
                                    'step' => '0.01',
                                    'min' => '0',
                                ],
                        'rounding_mode' => \NumberFormatter::ROUND_HALFUP, 
                    ]
            )
            ->add('tipoRetencion', EntityType::class, [
                'class' => TipoRetencion::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MetodoRetencion::class,
        ]);
    }
}
