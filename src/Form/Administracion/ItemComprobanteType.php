<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\ArticuloConcepto;
use App\Entity\Administracion\ComprobanteTransaccion;
use App\Entity\Administracion\ItemComprobante;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemComprobanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $code = $options['code'];
        $builder
            ->add('cantidad')
            ->add('precioUnitario')
            ->add('descripcion')
            ->add('articulo', 
                  EntityType::class, [
                                        'class' => ArticuloConcepto::class,

                                        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('code')
                 ->setDefaults([
            'data_class' => ItemComprobante::class,
        ]);
    }
}

/*
                                        'query_builder' => function (\Doctrine\ORM\EntityRepository $er) use ($code) {
                                                                                                            return $er->createQueryBuilder('c')
                                                                                                                ->where('c.activo = :activo')
                                                                                                                ->andWhere('c.circuito in (:circuito)')
                                                                                                                ->setParameter('activo', true)
                                                                                                                ->setParameter('circuito', ($code == 'c' ? "1,3" : "2,3"))
                                                                                                                ->orderBy('c.nombre', 'ASC');
                                                                                                        },
*/
