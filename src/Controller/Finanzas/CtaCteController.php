<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\CtaCte;
use App\Form\Finanzas\CtaCteType;
use App\Repository\Finanzas\CtaCteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\Proveedor;
use App\Entity\Finanzas\MovimientoCuenta;
use App\Repository\Administracion\ComprobanteFacturaRepository;
use App\Repository\Finanzas\MovimientoCuentaRepository;
use App\Repository\Finanzas\ReciboRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/finanzas/ctacte')]

final class CtaCteController extends AbstractController
{

    private function getFormSelect($type = 'c')
    {
        $form = $this->createFormBuilder()
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
                    ->add('empresa_grupo', 
                           EntityType::class, 
                           [
                                'class' => \App\Entity\Administracion\EmpresaGrupo::class,
                           ]);
    if ($type == 'c')
    {       $form->add('mostrar', ChoiceType::class, [
                                                            'choices' => ['Detalle Cta. Cte.' => 'CC', 'Composicion de Saldo' => 'FP']
                                            ]);
    }
    
    return $form->getForm();
    
    }
    #[Route('/delete/{id}/movimiento', name: 'app_finanzas_cta_cte_delete_movimiento', methods: ['DELETE'])]
    public function eliminarMovimientoCuenta(MovimientoCuenta $movimiento, EntityManagerInterface $entityManager): Response
    {
        $movimiento->borrarComprobanteAsociado($this->getUser());
        $entityManager->remove($movimiento);
        $entityManager->flush();

        return new JsonResponse(['ok' => true]);
    }

    /**
     * @Route("/exportar/pdf", name="exportar_pdf")
     */
    #[Route('/exportar/pdf', name:'exportar_pdf', methods: ['GET', 'POST'])]
    public function exportarPdf(Request $request,  CtaCteRepository $ctaCteRepository, MovimientoCuentaRepository $movimientoCuentaRepository,  EntityManagerInterface $entityManager, ComprobanteFacturaRepository $comprobanteFacturaRepository, ReciboRepository $reciboRepository): Response
    {

        $gpo = $request->query->get('gpo');

        $grupo = $entityManager->getRepository(\App\Entity\Administracion\EmpresaGrupo::class)->find($gpo);

        $show = $request->query->get('show', 'CC');
       //
        $titular = null;
        $cli = $request->query->get('cli', 0);
        if ($cli)
        {
            $titular = $entityManager->getRepository(Cliente::class)->find($cli);
        }

        if (!$titular)
        {
            $ctacte = $ctaCteRepository->resumenCtaCte($grupo, 'c');

            $html = $this->renderView('finanzas/cta_cte/export.html.twig', [
                                                                                'movimientos' => $ctacte,
                                                                                'titular' => $titular,
                                                                                'grupo' => $grupo,
                                                                                'tipo' => 'c',
                                                                                't' => 'resumen',
                                                                                'title' => 'Resumen de Cuentas Corrientes Clientes'
                                                                            ]);
        }

           elseif (!isset($show) || $show == 'CC')
            {
                    $ctacte = $movimientoCuentaRepository->resumenCtresumenMovimientosaCte($titular, $grupo);
                    $html = $this->renderView('finanzas/cta_cte/export.html.twig', [
                        'movimientos' => $ctacte,
                        'titular' => $titular,
                        'grupo' => $grupo,
                        'tipo' => 'c',
                        't' => 'detalle',
                        'title' => 'Detalle de Cuenta Corriente => ' . $titular
                    ]);
            }
            else
            {
                $pendientes = $comprobanteFacturaRepository->getComprobantesPendientes($titular, $grupo);
                $recibos = $reciboRepository->getRecibosPendientes($titular, $grupo);
                $resultado = array_merge($pendientes, $recibos);

                    $html = $this->renderView('finanzas/cta_cte/export.html.twig', [
                        'movimientos' => $resultado,
                        'titular' => $titular,
                        'grupo' => $grupo,
                        'tipo' => 'c',
                        't' => 'composicion',
                        'title' => 'Composición de Saldo => ' . $titular
                    ]);
                
            }


       /* $ctacte = $movimientoCuentaRepository->resumenCtresumenMovimientosaCte($titular, $grupo);


        // Renderizar la plantilla Twig a una cadena de HTML
        $html = $this->renderView('finanzas/cta_cte/export.html.twig', [
            'movimientos' => $ctacte,
            'titular' => $titular,
            'grupo' => $grupo,
            'tipo' => 'c'
        ]);*/

        // Configurar Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf($options);
        
        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Opcional: ajustar el tamaño y orientación del papel
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Crear una respuesta HTTP con el PDF
        return new Response(
            $dompdf->stream('reporte_tabla.pdf', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/{t}', name:'app_finanzas_cta_cte_index', methods: ['GET', 'POST'])]
    public function index($t, Request $request, CtaCteRepository $ctaCteRepository, MovimientoCuentaRepository $movimientoCuentaRepository, ComprobanteFacturaRepository $comprobanteFacturaRepository, ReciboRepository $reciboRepository): Response
    {
        
        $form = $this->getFormSelect($t);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();

            if (!$data['ente'])
            {
                $ctacte = $ctaCteRepository->resumenCtaCte($data['empresa_grupo'], $t);

              //  dd($ctacte);
                return $this->render('finanzas/cta_cte/index_resume.html.twig', 
                                    [
                                        'form' => $form->createView(),
                                        'movimientos' => $ctacte,
                                        'tipo' => $t,
                                    ]);
            }

            if (!isset($data['mostrar']) || $data['mostrar'] == 'CC')
            {
                    $ctacte = $movimientoCuentaRepository->resumenCtresumenMovimientosaCte($data['ente'], $data['empresa_grupo']);
                    return $this->render('finanzas/cta_cte/index.html.twig', 
                                        [
                        
                                            'form' => $form->createView(),
                                            'movimientos' => $ctacte,
                                            'tipo' => $t
                                        ]);
            }
            else
            {
                $pendientes = $comprobanteFacturaRepository->getComprobantesPendientes($data['ente'], $data['empresa_grupo']);
                $recibos = $reciboRepository->getRecibosPendientes($data['ente'], $data['empresa_grupo']);
                $resultado = array_merge($pendientes, $recibos);

                return $this->render('finanzas/cta_cte/composicion.html.twig', 
                                    [
                    
                                        'form' => $form->createView(),
                                        'movimientos' => $resultado,
                                        'tipo' => $t
                                    ]);
                
            }
        }


        return $this->render('finanzas/cta_cte/index.html.twig', [
            'cta_ctes' => $ctaCteRepository->findAll(), 'form' => $form->createView(), 'tipo' => $t
        ]);
    }

    #[Route('/new', name: 'app_finanzas_cta_cte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ctaCte = new CtaCte();
        $form = $this->createForm(CtaCteType::class, $ctaCte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ctaCte);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte/new.html.twig', [
            'cta_cte' => $ctaCte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_show', methods: ['GET'])]
    public function show(CtaCte $ctaCte): Response
    {
        return $this->render('finanzas/cta_cte/show.html.twig', [
            'cta_cte' => $ctaCte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_cta_cte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CtaCte $ctaCte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CtaCteType::class, $ctaCte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte/edit.html.twig', [
            'cta_cte' => $ctaCte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_delete', methods: ['POST'])]
    public function delete(Request $request, CtaCte $ctaCte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ctaCte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($ctaCte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
    }
}
