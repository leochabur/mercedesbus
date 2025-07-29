<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\Banco;
use App\Entity\Finanzas\CtaCteBanco;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CtaCteBancoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero')
            ->add('liberaValores', null, [
                'label' => 'Emite Valores'
            ])
            ->add('moneda', ChoiceType::class, [
                'choices' => [
                    '$' => '$',
                    'U$D' => 'U$D',
                ],
                'placeholder' => 'Seleccione una moneda',
            ])
            ->add('banco', EntityType::class, [
                'class' => Banco::class,
                'choice_label' => 'nombre',
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                    return $er->createQueryBuilder('b')
                        ->where('b.activo = true')
                        ->orderBy('b.nombre', 'ASC');
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CtaCteBanco::class,
        ]);
    }
}
