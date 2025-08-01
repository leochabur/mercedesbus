<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\Banco;
use App\Entity\Finanzas\Recibo;
use App\Form\Finanzas\ReciboType;
use App\Repository\Finanzas\ReciboRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\Finanzas\MetodoEfectivoType;
use App\Form\Finanzas\MetodoTransferenciaType;
use App\Entity\Finanzas\CtaCte;
use App\Entity\Finanzas\MovimientoPago; 
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Finanzas\MetodoEfectivo;
use App\Entity\Finanzas\MetodoTransferencia;
use App\Entity\Finanzas\Caja;
use App\Entity\Finanzas\CtaCteBanco;
use App\Entity\Finanzas\MetodoCheque;
use App\Entity\Finanzas\MetodoChequeCartera;
use App\Entity\Finanzas\MetodoChequePropio;
use App\Form\Finanzas\MetodoChequeCarteraType;
use App\Form\Finanzas\MetodoChequePropioType;
use App\Form\Finanzas\MetodoChequeType;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/finanzas/recibo')]

final class ReciboController extends AbstractController
{
    #[Route(name: 'app_finanzas_recibo_index', methods: ['GET'])]
    public function index(ReciboRepository $reciboRepository): Response
    {
        return $this->render('finanzas/recibo/index.html.twig', [
            'recibos' => $reciboRepository->findAll(),
        ]);
    }

    #[Route('/{type}/new', name: 'app_finanzas_recibo_new', methods: ['GET', 'POST'])]
    public function new($type, Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, ReciboRepository $reciboRepository): Response
    {
        $lastId = $reciboRepository->findLastId();
        if (!$lastId)
        {
            $lastId = 1;
        }
        $lastId++;
        $recibo = new Recibo();
        $recibo->setNumero($lastId);
        $form = $this->createForm(ReciboType::class, $recibo, ['tipo' => $type]);
        $form->handleRequest($request);

        $formEftvo = $this->createForm(MetodoEfectivoType::class, null);
        $formTrx = $this->createForm(MetodoTransferenciaType::class, null);
        $formCheque = $this->createForm(MetodoChequeType::class, null);
        $formChequePropio = $this->createForm(MetodoChequePropioType::class, null);
        $formChequeCartera = $this->createForm(MetodoChequeCarteraType::class, null);

        


        if ($form->isSubmitted())
        {
            if ($form->isValid()) 
            {

                if (!$recibo->getPrecioTotalConIva())
                {   
                    return new JsonResponse(['ok' => false, 'message' => 'El importe del recibo es requerido']);

                }
                
                $formas = json_decode($request->request->get('formas'), true);

                if (!count($formas))
                {
                    return new JsonResponse(['ok' => false, 'message' => 'No se ha cargado ninguna forma de pago']);
                }

                $total = 0;

                foreach ($formas as $f)
                {
                    if ($f['monto'] && is_numeric($f['monto']))
                    {   
                        $total+= $f['monto'];
                    }
                    else
                    {
                        return new JsonResponse(['ok' => false, 'message' => 'El importe de la forma de pago es requerido y debe ser numerico.']);
                    }
                }

                if ($total != $recibo->getPrecioTotalConIva())
                {
                    return new JsonResponse(['ok' => false, 'message' => 'El importe del recibo no coincide con los importes ingresados en la forma de pago']);
                }

                $metodo = null;
                foreach ($formas as $f)
                {
                    if ($f['type']['code'] == 'e')
                    {
                        $caja = $entityManager->find(Caja::class, $f['caja']['code']);
                        $metodo = new MetodoEfectivo();
                        $metodo->setCaja($caja)
                                ->setImporte($f['monto'])
                                ->setRecibo($recibo);
                        $errors = $validator->validate($metodo);
                        if (count($errors) > 0) 
                        {
                            $errorString = "Forma Pago Efectivo:\n";
                            foreach ($errors as $error) {
                                $errorString .= '#  ' . $error->getMessage() . "\n";
                            }
                            return new JsonResponse(['ok' => false, 'message' => $errorString]);
                        }
                    }
                    elseif ($f['type']['code'] == 't')
                    {
                        $cc = $entityManager->find(CtaCteBanco::class, $f['caja']['code']);
                        $metodo = new MetodoTransferencia();
                        $metodo->setCtacte($cc)
                                ->setImporte($f['monto'])
                                ->setRecibo($recibo);
                        $errors = $validator->validate($metodo);
                        if (count($errors) > 0) 
                        {
                            $errorString = "Forma Pago Transferencia:\n";
                            foreach ($errors as $error) {
                                $errorString .= '#  ' . $error->getMessage() . "\n";
                            }
                            return new JsonResponse(['ok' => false, 'message' => $errorString]);
                        }
                    }
                    elseif ($f['type']['code'] == 'c')
                    {
                        
                        $fecha = \DateTime::createFromFormat('Y-m-d', $f['fecha']);
                        $fecha = $fecha ? $fecha : null;
                        $bco = $entityManager->find(Banco::class, $f['caja']['code']);
         
                        $metodo = new MetodoCheque();
                        $metodo->setBanco($bco)
                                ->setImporte($f['monto'])
                                ->setFechaPago($fecha)
                                ->setNumeroCheque($f['numero'])
                                ->setDelCliente(($f['librador'] ? false : true))
                                ->setLibrador($f['librador'])                                
                                ->setRecibo($recibo);

                        $errors = $validator->validate($metodo);
                        if (count($errors) > 0) 
                        {
                            $errorString = "Forma Pago Cheque:\n";
                            foreach ($errors as $error) {
                                $errorString .= '#  ' . $error->getMessage() . "\n";
                            }
                            return new JsonResponse(['ok' => false, 'message' => $errorString]);
                        }
                        
                    }
                    elseif ($f['type']['code'] == 'cp')
                    {
                        
                        $fecha = \DateTime::createFromFormat('Y-m-d', $f['fecha']);
                        $fecha = $fecha ? $fecha : null;
                        $cta = $entityManager->find(CtaCteBanco::class, $f['caja']['code']);
         
                        $metodo = new MetodoChequePropio();
                        $metodo->setCtaCteBanco($cta)
                                ->setImporte($f['monto'])
                                ->setFechaPago($fecha)
                                ->setNumeroCheque($f['numero'])                              
                                ->setRecibo($recibo);

                        $errors = $validator->validate($metodo);
                        if (count($errors) > 0) 
                        {
                            $errorString = "Forma Pago Cheque:\n";
                            foreach ($errors as $error) {
                                $errorString .= '#  ' . $error->getMessage() . "\n";
                            }
                            return new JsonResponse(['ok' => false, 'message' => $errorString]);
                        }
                        
                    }
                    elseif ($f['type']['code'] == 'chc')
                    {
                        $ch = $entityManager->find(MetodoCheque::class, $f['caja']['code']);

                        if (!$ch)
                        {
                            return new JsonResponse(['ok' => false, 'message' => 'No se encuentra el cheque en cartera']);
                        }

                        $ch->setEntregado(true);


                        $metodo = new MetodoChequeCartera();
                          
                        $metodo->setChequeCartera($ch)
                                ->setImporte($f['monto'])                         
                                ->setRecibo($recibo);

                        $errors = $validator->validate($metodo);
                        if (count($errors) > 0) 
                        {
                            $errorString = "Forma Pago Cheque:\n";
                            foreach ($errors as $error) {
                                $errorString .= '#  ' . $error->getMessage() . "\n";
                            }
                            return new JsonResponse(['ok' => false, 'message' => $errorString]);
                        }
                        
                    }
                    $entityManager->persist($metodo);
                    
                }

                $repository = $entityManager->getRepository(CtaCte::class);
                $ctacte = $repository->getCtaCteEntidad($recibo->getEnteComercial(), $recibo->getEmpresaGrupo());
                if (!$ctacte)
                {
                    $ctacte = new CtaCte();
                    $ctacte->setTitular($recibo->getEnteComercial())
                            ->setEmpresaGrupo($recibo->getEmpresaGrupo())
                            ->setTipo(1);
                    $entityManager->persist($ctacte);
                }

                $movimiento = new MovimientoPago();
                $movimiento->setRecibo($recibo)
                           ->setImporte($recibo->getPrecioTotalConIva())
                           ->setDetalle("Recibo")
                           ->setFechaAlta($recibo->getFecha())
                           ->setCtaCte($ctacte);
                $ctacte->updateImporte($recibo->getPrecioTotalConIva(), 'P');
                $entityManager->persist($movimiento);       


                $entityManager->persist($recibo);
                $entityManager->flush();

                $this->addFlash('success', 'Recibo creado correctamente');
                return new JsonResponse(['ok' => true, 'message' => 'El importe del recibo es requerido']);
            }
            else
            {
                foreach ($form->getErrors(true) as $error) 
                {
                    $message = $error->getCause()->getMessage();

                    return new JsonResponse(['ok' => false, 'message' => $message]);
                }
            }
        }

        return $this->render('finanzas/recibo/new.html.twig', [
            'recibo' => $recibo,
            'form' => $form,
            'formEftvo' => $formEftvo,
            'formTrx' => $formTrx,
            'formCheque' => $formCheque,
            'formChequePropio' => $formChequePropio,
            'formChequeCartera' => $formChequeCartera,
            'type' => $type
        ]);
    }

    #[Route('/{id}/tipo/{tipo}', name: 'app_finanzas_recibo_show', methods: ['GET'])]
    public function show(Recibo $id, $tipo): Response
    {
        return $this->render('finanzas/recibo/show.html.twig', [
            'recibo' => $id, 'label' => ($tipo =='p' ? 'Proveedor' : 'Cliente')
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_recibo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Recibo $recibo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReciboType::class, $recibo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_recibo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/recibo/edit.html.twig', [
                                                                    'recibo' => $recibo,
                                                                    'form' => $form,
                                                                ]);
    }

    #[Route('/{id}', name: 'app_finanzas_recibo_delete', methods: ['POST'])]
    public function delete(Request $request, Recibo $recibo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recibo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($recibo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_recibo_index', [], Response::HTTP_SEE_OTHER);
    }
}
