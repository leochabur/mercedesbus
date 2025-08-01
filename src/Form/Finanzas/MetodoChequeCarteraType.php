<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\MetodoCheque;
use App\Entity\Finanzas\MetodoChequeCartera;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetodoChequeCarteraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('chequeCartera', EntityType::class, [
                'class' => MetodoCheque::class,
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                                                                                    return $er->createQueryBuilder('mc')
                                                                                        ->where('mc.entregado = false')
                                                                                        ->orderBy('mc.id', 'ASC');
                                                                                },
'choice_attr' => function ($choice, string $key, mixed $value) {

                    return [
                        'data-monto' => $choice->getImporte(), // Obtenemos el precio de cada entidad
                    ];
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MetodoChequeCartera::class,
        ]);
    }
}
