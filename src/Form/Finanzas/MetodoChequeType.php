<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\Banco;
use App\Entity\Finanzas\MetodoCheque;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetodoChequeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe')
            ->add('numeroCheque')
            ->add('fechaPago', DateType::class , [
                'widget' => 'single_text',
            ])
            ->add('librador')
            ->add('banco', EntityType::class, [
                'class' => Banco::class ,
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
            'data_class' => MetodoCheque::class,
        ]);
    }
}
