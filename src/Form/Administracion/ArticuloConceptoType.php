<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\ArticuloConcepto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ArticuloConceptoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('activo')
            ->add('circuito', ChoiceType::class, [
                                                'choices'  => [
                                                                    'Ventas' => 1,
                                                                    'Compras' => 2,
                                                                    'Todos' => 3,
                                                                ],
                                            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ArticuloConcepto::class,
        ]);
    }
}
