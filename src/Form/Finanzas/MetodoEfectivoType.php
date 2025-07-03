<?php

namespace App\Form\Finanzas;

use App\Entity\Finanzas\Caja;
use App\Entity\Finanzas\MetodoEfectivo;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType; 

class MetodoEfectivoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('importe',
 NumberType::class, [
                'label' => 'Importe',
                'scale' => 2, // Número de decimales permitidos
                'html5' => true, // Para usar <input type="number">
                'attr' => [
                    'step' => '0.01', // Paso para el input type="number" (ej. de 0.01 en 0.01)
                    'min' => '0',      // Valor mínimo (opcional)
                    // 'max' => '1000' // Valor máximo (opcional)
                ],
                // Opciones de redondeo si la precisión no es exacta
                'rounding_mode' => \NumberFormatter::ROUND_HALFUP, 
                // Otras opciones comunes:
                // 'required' => true,
                // 'empty_data' => '0.00',
            ])
            ->add('caja', EntityType::class, [
                'class' => Caja::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MetodoEfectivo::class,
        ]);
    }
}
