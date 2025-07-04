<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoTransferencia;
use App\Form\Finanzas\MetodoTransferenciaType;
use App\Repository\Finanzas\MetodoTransferenciaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/metodo/transferencia')]
final class MetodoTransferenciaController extends AbstractController
{
    #[Route(name: 'app_finanzas_metodo_transferencia_index', methods: ['GET'])]
    public function index(MetodoTransferenciaRepository $metodoTransferenciaRepository): Response
    {
        return $this->render('finanzas/metodo_transferencia/index.html.twig', [
            'metodo_transferencias' => $metodoTransferenciaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_transferencia_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoTransferencium = new MetodoTransferencia();
        $form = $this->createForm(MetodoTransferenciaType::class, $metodoTransferencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoTransferencium);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_transferencia_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_transferencia/new.html.twig', [
            'metodo_transferencium' => $metodoTransferencium,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_transferencia_show', methods: ['GET'])]
    public function show(MetodoTransferencia $metodoTransferencium): Response
    {
        return $this->render('finanzas/metodo_transferencia/show.html.twig', [
            'metodo_transferencium' => $metodoTransferencium,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_transferencia_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoTransferencia $metodoTransferencium, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoTransferenciaType::class, $metodoTransferencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_transferencia_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_transferencia/edit.html.twig', [
            'metodo_transferencium' => $metodoTransferencium,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_transferencia_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoTransferencia $metodoTransferencium, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoTransferencium->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoTransferencium);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_transferencia_index', [], Response::HTTP_SEE_OTHER);
    }
}
