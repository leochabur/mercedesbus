<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ComprobanteCliente;
use App\Entity\Administracion\ComprobanteFactura;
use App\Form\Administracion\ComprobanteClienteType;
use App\Entity\Administracion\ComprobanteProveedor;
use App\Form\Administracion\ComprobanteProveedorType;
use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Finanzas\CtaCte;
use App\Entity\Finanzas\MovimientoVenta;
use App\Repository\Finanzas\MovimientoFacturaReciboRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Administracion\Cliente;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use App\Entity\Administracion\Proveedor;
use Symfony\Component\Form\Extension\Core\Type\DateType;

#[Route('/administracion/comprobante')]
final class ComprobanteClienteController extends AbstractController
{


    private function getFormSelect($type = 'c')
    {
        $form = $this->createFormBuilder()
                     ->add('desde', DateType::class, [
                        'widget' => 'single_text',
                        'required' => false,
                        'label' => 'Fecha desde'])
                     ->add('hasta', DateType::class, [
                        'widget' => 'single_text',
                        'required' => false,
                        'label' => 'Fecha hasta'])
                     ->add('ente', 
                           EntityType::class, 
                           [
                                'class' => ($type == 'c' ? Cliente::class : Proveedor::class),
                                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                                    return $er->createQueryBuilder('c')
                                        ->where('c.activo = :activo')
                                        ->setParameter('activo', true)
                                        ->orderBy('c.razonSocial', 'ASC');
                                },
                                'label' => 'Seleccione un ente',
                                'placeholder' => 'Todas las opciones'
                            ])
                     ->add('empresa', 
                           EntityType::class, 
                           [
                                'class' => \App\Entity\Administracion\EmpresaGrupo::class,
                           ]);

        return $form->getForm();
    }

    #[Route('/buscar', name: 'app_administracion_comprobante_buscar_cliente', methods: ['GET', 'POST'])]
    public function buscarComprobantes(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->getFormSelect('c');
        $comprobantes = [];
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $data = $form->getData();
                $comprobanteClienteRepository = $entityManager->getRepository(ComprobanteCliente::class);
                $comprobantes = $comprobanteClienteRepository->buscarComprobantes($data['desde'], $data['hasta'], $data['ente'], $data['empresa_grupo']);
            }
        }

        return $this->render('administracion/comprobante_cliente/buscar.html.twig', [
            'form' => $form->createView(),
            'comprobantes' => $comprobantes
        ]);
    }


    #[Route(name: 'app_administracion_comprobante_cliente_aplicaciones', methods: ['GET', 'POST'])]
    public function actualizarAplicaciones(Request $request, MovimientoFacturaReciboRepository $repository, EntityManagerInterface $entityManager): Response
    {

            if ($request->isMethod('POST'))
            {
                $auxiliar = array();

                $aplicaciones = $repository->findAll();
                foreach ($aplicaciones as $aplicacion)
                {
                    $comprobante = $aplicacion->getComprobanteFactura();
                    $recibo = $aplicacion->getRecibo();
                    if ($comprobante && $recibo)
                    {
                        if (!array_key_exists($comprobante->getId(), $auxiliar))
                        {
                            $auxiliar[$comprobante->getId()] = $comprobante;
                            $comprobante->setSaldoACancelar($comprobante->getPrecioTotalConIva());
                        }
                        
                        if (!$recibo->getDeletedAt())
                        {
                             
                            $nuevoSaldo = $auxiliar[$comprobante->getId()]->getSaldoACancelar() - $aplicacion->getImporte();
                            $auxiliar[$comprobante->getId()]->setSaldoACancelar($nuevoSaldo);
                        }
                    }
                }
                $entityManager->flush();
            }

            return $this->render('administracion/comprobante_cliente/aplicacion.html.twig', []);
    }


    #[Route('/proximos/conceptos/a/facturar', name: 'app_administracion_comprobante_cliente_items_a_facturar', methods: ['GET', 'POST'])]
    public function proximosItemsAFacturar(Request $request, ComprobanteClienteRepository $comprobanteClienteRepository): Response
    {
        $form = $this->createFormBuilder()
                    ->add('ente', 
                           EntityType::class, 
                           [
                                'class' =>  Cliente::class,
                                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) {
                                    return $er->createQueryBuilder('c')
                                        ->where('c.activo = :activo')
                                        ->setParameter('activo', true)
                                        ->orderBy('c.razonSocial', 'ASC');
                                },
                                'label' => 'Seleccione un ente',
                                'placeholder' => 'Todas las opciones'
                            ])
                    ->add('proximo', TextType::class)
                            ->getForm();
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $data = $form->getData();
                $ente = $data['ente'] ?? null;
                $items = $comprobanteClienteRepository->proximosItemsAFacturar($ente);
                $comprobantes = [];
                $margenDias = ($data['proximo'] ? $data['proximo'] : 0);
                $hoy = new \DateTime();
                $hoy->modify('+'.$margenDias.' days');

                $auxHoy = new \DateTime();
                foreach ($items as $item)
                {
                    $fecha = \DateTime::createFromFormat('Y-m-d', $item['fecha_ultimo_comprobante']);
                    $utimaFecha = clone $fecha;
                    $fecha->modify('+'.$item['cicloFacturacion'].' days');
               
                    if ($fecha <= $hoy)
                    {

                        $vencida = ($fecha < $auxHoy ? true : false);

                        $comprobantes[] = [
                                                'cliente' => $item['nombre_cliente'],
                                                'articulo' => $item['articulo'],
                                                'ultima_fecha' => $utimaFecha,
                                                'proxima_fecha' => $fecha,
                                                'cicloFacturacion' => $item['cicloFacturacion'],
                                                'vencida' => $vencida
                                            ];                            
                        
                    }

                }
                return $this->render('administracion/comprobante_cliente/proximos.html.twig', [
                    'form' => $form->createView(),
                    'comprobantes' => $comprobantes             
                ]);
            }
        }

        return $this->render('administracion/comprobante_cliente/proximos.html.twig', [
            'form' => $form->createView(),
            'comprobantes' => []             
        ]);
    }


    #[Route(name: 'app_administracion_comprobante_cliente_index', methods: ['GET'])]
    public function index(ComprobanteClienteRepository $comprobanteClienteRepository): Response
    {
        return $this->render('administracion/comprobante_cliente/index.html.twig', [
            'comprobante_clientes' => $comprobanteClienteRepository->findAll(),
        ]);
    }

    #[Route('/{code}/new/{id}', name: 'app_administracion_comprobante_cliente_new', methods: ['GET', 'POST'], defaults: ['id' => 0])]
    public function new($code, ?string $id = null, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($code == 'c')
        {
            if ($id)
            {
                $comprobanteCliente = $entityManager->getRepository(ComprobanteCliente::class)->find($id);
            }
            else
            {
                $comprobanteCliente = new ComprobanteCliente();
            }

            $form = $this->createForm(ComprobanteClienteType::class, $comprobanteCliente, [
                'ente' => 'Cliente'
            ]);
        }
        else
        {
            if ($id)
            {
                $comprobanteCliente = $entityManager->getRepository(ComprobanteProveedor::class)->find($id);
            }
            else
            {
                $comprobanteCliente = new ComprobanteProveedor();
            }
            $form = $this->createForm(ComprobanteProveedorType::class, $comprobanteCliente, [
                'ente' => 'Proveedor'
            ]);            
            $ente = 'Proveedor';
        }


        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
           
            if ($form->isValid()) 
            {
                 $comprobanteCliente->updateValues();
                if ($comprobanteCliente->isAfectaCtaCte())
                {
                    $repository = $entityManager->getRepository(CtaCte::class);
                    $ctacte = $repository->getCtaCteEntidad($comprobanteCliente->getEnteComercial(), $comprobanteCliente->getEmpresaGrupo());
                    if (!$ctacte)
                    {
                        $ctacte = new CtaCte();
                        $ctacte->setTitular($comprobanteCliente->getEnteComercial())
                                ->setEmpresaGrupo($comprobanteCliente->getEmpresaGrupo())
                                ->setTipo(1);
                        $entityManager->persist($ctacte);
                    }
                    $movimiento = new MovimientoVenta();
                    $movimiento->setComprobante($comprobanteCliente)
                               ->setImporte($comprobanteCliente->getPrecioTotalConIva())
                               ->setDetalle("$comprobanteCliente")
                               ->setFechaAlta($comprobanteCliente->getFecha())
                               ->setCtaCte($ctacte);
                    $ctacte->updateImporte($comprobanteCliente->getPrecioTotalConIva());
                    $entityManager->persist($movimiento);             
                }
                if (!$id)
                {
                    $entityManager->persist($comprobanteCliente);
                }
                $entityManager->flush();
                $this->addFlash('success', 'El comprobante ha sido almacenado correctamente.');
                return $this->redirectToRoute('app_administracion_comprobante_cliente_new', ['code' => $code], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->render('administracion/comprobante_cliente/new.html.twig', [
            'comprobante_cliente' => $comprobanteCliente,
            'form' => $form,
            'code' => $code,
            'label' => ($code == 'c' ? 'Venta' : 'Compra')
        ]);
    }

    #[Route('/{id}/show', name: 'app_administracion_comprobante_cliente_show', methods: ['GET'])]
    public function show(ComprobanteFactura $comprobanteFactura): Response
    {
        return $this->render('administracion/comprobante_cliente/show.html.twig', [
            'comprobante' => $comprobanteFactura,
            'label' => 'Venta'
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_comprobante_cliente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ComprobanteCliente $comprobanteCliente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ComprobanteClienteType::class, $comprobanteCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_comprobante_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/comprobante_cliente/edit.html.twig', [
            'comprobante_cliente' => $comprobanteCliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_comprobante_cliente_delete', methods: ['POST'])]
    public function delete(Request $request, ComprobanteCliente $comprobanteCliente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comprobanteCliente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($comprobanteCliente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_comprobante_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
