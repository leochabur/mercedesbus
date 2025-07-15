<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\ComprobanteCliente;
use App\Entity\Administracion\TipoComprobante;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Administracion\LetraComprobante;

use App\Entity\Administracion\EmpresaGrupo;

class ComprobanteClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', null, [
                'widget' => 'single_text',
            ])
            ->add('puntoVenta')
            ->add('numero')
            ->add('afectaCtaCte')
            ->add('identificacionComprobante', EntityType::class, [
                'class' => LetraComprobante::class,
            ])
            ->add('tipoComprobante', EntityType::class, [
                'class' => TipoComprobante::class,
            ])
            ->add('enteComercial', EntityType::class, [
                'class' => Cliente::class,
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.activo = :activo')
                        ->setParameter('activo', true)
                        ->orderBy('c.razonSocial', 'ASC');
                },
                'label' => $options['ente']
            ])
            ->add('empresaGrupo', EntityType::class, [
                'class' => EmpresaGrupo::class,
                'required' => false,
                'placeholder' => 'Seleccione un grupo',
                'label' => 'Grupo Empresarial',
            ])
            ->add('items', CollectionType::class, [
                'entry_type' => ItemComprobanteType::class,
                'entry_options' => ['label' => false, 'code' => 'c'],
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false, // Esto es crucial para que los métodos addItem y removeItem de Factura se llamen
                'label' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Guardar Factura',
                'attr' => ['class' => 'btn btn-primary mt-3'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('ente')
                    ->setDefaults([
                                    'data_class' => ComprobanteCliente::class,
                                ]);
    }
}
