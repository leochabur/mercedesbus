<?php

namespace App\Form\Administracion;

use App\Entity\Administracion\EmpresaGrupo;
use App\Entity\Administracion\RespIva;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpresaGrupoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('razonSocial')
            ->add('cuit')
            ->add('activo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EmpresaGrupo::class,
        ]);
    }
}
