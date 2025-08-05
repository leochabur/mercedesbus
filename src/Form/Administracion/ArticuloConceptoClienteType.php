<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\ArticuloConcepto;
use App\Entity\Administracion\ArticuloConceptoCliente;
use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\EnteComercial;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticuloConceptoClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe')
            ->add('cicloFacturacion', ChoiceType::class, [
                    'choices' => [
                                    '7 Dias' => 7,
                                    '10 Dias' => 10,
                                    '15 Dias' => 15,
                                    '30 Dias' => 30
                                ],
                ])
            ->add('enteComercial', EntityType::class, [
                'class' => Cliente::class,
            ])
            ->add('articulo', EntityType::class, [
                'class' => ArticuloConcepto::class,
            ])
            ->add('activo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ArticuloConceptoCliente::class,
        ]);
    }
}
