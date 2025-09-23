<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MovimientoFacturaRecibo;
use App\Form\Finanzas\MovimientoFacturaReciboType;
use App\Repository\Finanzas\MovimientoFacturaReciboRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/movimiento/factura/recibo')]
final class MovimientoFacturaReciboController extends AbstractController
{
   /* #[Route(name: 'app_finanzas_movimiento_factura_recibo_index', methods: ['GET'])]
    public function index(MovimientoFacturaReciboRepository $movimientoFacturaReciboRepository): Response
    {
        return $this->render('finanzas/movimiento_factura_recibo/index.html.twig', [
            'movimiento_factura_recibos' => $movimientoFacturaReciboRepository->findAll(),
        ]);
    }*/

    #[Route(name: 'app_finanzas_movimiento_factura_recibo_index', methods: ['GET'])]
    public function index(MovimientoFacturaReciboRepository $movimientoFacturaReciboRepository): Response
    {
        return $this->render('finanzas/movimiento_factura_recibo/index.html.twig', [
            'movimiento_factura_recibos' => $movimientoFacturaReciboRepository->findAll(),
        ]);
    }



    #[Route('/new', name: 'app_finanzas_movimiento_factura_recibo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $movimientoFacturaRecibo = new MovimientoFacturaRecibo();
        $form = $this->createForm(MovimientoFacturaReciboType::class, $movimientoFacturaRecibo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($movimientoFacturaRecibo);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_movimiento_factura_recibo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/movimiento_factura_recibo/new.html.twig', [
            'movimiento_factura_recibo' => $movimientoFacturaRecibo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_movimiento_factura_recibo_show', methods: ['GET'])]
    public function show(MovimientoFacturaRecibo $movimientoFacturaRecibo): Response
    {
        return $this->render('finanzas/movimiento_factura_recibo/show.html.twig', [
            'movimiento_factura_recibo' => $movimientoFacturaRecibo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_movimiento_factura_recibo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MovimientoFacturaRecibo $movimientoFacturaRecibo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MovimientoFacturaReciboType::class, $movimientoFacturaRecibo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_movimiento_factura_recibo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/movimiento_factura_recibo/edit.html.twig', [
            'movimiento_factura_recibo' => $movimientoFacturaRecibo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_movimiento_factura_recibo_delete', methods: ['POST'])]
    public function delete(Request $request, MovimientoFacturaRecibo $movimientoFacturaRecibo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movimientoFacturaRecibo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($movimientoFacturaRecibo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_movimiento_factura_recibo_index', [], Response::HTTP_SEE_OTHER);
    }
}
