<?php

namespace App\Form\Finanzas;

use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\Proveedor;
use App\Entity\Administracion\LetraComprobante;
use App\Entity\Administracion\TipoComprobante;
use App\Entity\Finanzas\MovimientoCuenta;
use App\Entity\Finanzas\Recibo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType; 

class ReciboType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options['tipo'] == 'c')
        {
            $formas = array(
                            'Efectivo' => 'E',
                            'Transferencia' => 'T',
                            'Cheque' => 'C',
                            'Retenciones' => 'R'
            );
        }
        else
        {
            $formas = array(
                            'Efectivo' => 'E',
                            'Transferencia' => 'T',
                            'Cheque Propio' => 'CP',
                            'Cheque en cartera' => 'CC'
            );
        }
        $builder
            ->add('fecha', null, [
                'widget' => 'single_text',
            ])
            ->add('precioTotalConIva', NumberType::class, [
                'label' => 'Importe total',
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
            ->add('empresaGrupo', EntityType::class, [
                'class' => \App\Entity\Administracion\EmpresaGrupo::class,

            ])
            ->add('forma', ChoiceType::class, [
                                                    'mapped' => false,
                                                    'placeholder' => 'Seleecione una opcion',
                                                    'choices'  => $formas,
                                                ])
            ->add('enteComercial', EntityType::class, [
                'class' => $options['tipo'] == 'c' ? Cliente::class : Proveedor::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
                                    'data_class' => Recibo::class,
                                ])
                ->setRequired('tipo');
    }
}
