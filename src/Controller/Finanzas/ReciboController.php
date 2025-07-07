<?php

namespace App\Controller\Finanzas;

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

    #[Route('/new', name: 'app_finanzas_recibo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recibo = new Recibo();
        $recibo->setNumero(123);
        $form = $this->createForm(ReciboType::class, $recibo);
        $form->handleRequest($request);

        $formEftvo = $this->createForm(MetodoEfectivoType::class, null);
        $formTrx = $this->createForm(MetodoTransferenciaType::class, null);

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
                    $total+= $f['monto'];
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
                        $entityManager->persist($metodo);
                    }
                    elseif ($f['type']['code'] == 't')
                    {
                        $cc = $entityManager->find(CtaCteBanco::class, $f['caja']['code']);
                        $metodo = new MetodoTransferencia();
                        $metodo->setCtacte($cc)
                                ->setImporte($f['monto'])
                                ->setRecibo($recibo);
                        $entityManager->persist($metodo);
                    }

                    
                }

                $repository = $entityManager->getRepository(CtaCte::class);
                $ctacte = $repository->getCtaCteEntidad($recibo->getEnteComercial());
                if (!$ctacte)
                {
                    $ctacte = new CtaCte();
                    $ctacte->setTitular($recibo->getEnteComercial())
                            ->setTipo(1);
                    $entityManager->persist($ctacte);
                }

                $movimiento = new MovimientoPago();
                $movimiento->setRecibo($recibo)
                           ->setImporte($recibo->getPrecioTotalConIva())
                           ->setDetalle("Reccibo")
                           ->setFechaAlta($recibo->getFecha())
                           ->setCtaCte($ctacte);
                $ctacte->updateImporte($recibo->getPrecioTotalConIva(), 'P');
                $entityManager->persist($movimiento);       


                $entityManager->persist($recibo);
                $entityManager->flush();

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
            'formTrx' => $formTrx
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_recibo_show', methods: ['GET'])]
    public function show(Recibo $recibo): Response
    {
        return $this->render('finanzas/recibo/show.html.twig', [
            'recibo' => $recibo,
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
