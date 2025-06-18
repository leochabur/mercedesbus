<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ItemComprobante;
use App\Form\Administracion\ItemComprobanteType;
use App\Repository\Administracion\ItemComprobanteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/item/comprobante')]
final class ItemComprobanteController extends AbstractController
{
    #[Route(name: 'app_administracion_item_comprobante_index', methods: ['GET'])]
    public function index(ItemComprobanteRepository $itemComprobanteRepository): Response
    {
        return $this->render('administracion/item_comprobante/index.html.twig', [
            'item_comprobantes' => $itemComprobanteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_item_comprobante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $itemComprobante = new ItemComprobante();
        $form = $this->createForm(ItemComprobanteType::class, $itemComprobante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($itemComprobante);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_item_comprobante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/item_comprobante/new.html.twig', [
            'item_comprobante' => $itemComprobante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_item_comprobante_show', methods: ['GET'])]
    public function show(ItemComprobante $itemComprobante): Response
    {
        return $this->render('administracion/item_comprobante/show.html.twig', [
            'item_comprobante' => $itemComprobante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_item_comprobante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ItemComprobante $itemComprobante, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ItemComprobanteType::class, $itemComprobante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_item_comprobante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/item_comprobante/edit.html.twig', [
            'item_comprobante' => $itemComprobante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_item_comprobante_delete', methods: ['POST'])]
    public function delete(Request $request, ItemComprobante $itemComprobante, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$itemComprobante->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($itemComprobante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_item_comprobante_index', [], Response::HTTP_SEE_OTHER);
    }
}
