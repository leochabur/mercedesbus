<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoChequePropio;
use App\Form\Finanzas\MetodoChequePropioType;
use App\Repository\Finanzas\MetodoChequePropioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/metodo/cheque/propio')]
final class MetodoChequePropioController extends AbstractController
{
    #[Route('/lista', name: 'app_finanzas_metodo_cheque_propio_index', methods: ['GET'])]
    public function index(MetodoChequePropioRepository $metodoChequePropioRepository): Response
    {
        return $this->render('finanzas/metodo_cheque_propio/index.html.twig', [
            'metodo_cheque_propios' => $metodoChequePropioRepository->getAllValores(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_cheque_propio_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoChequePropio = new MetodoChequePropio();
        $form = $this->createForm(MetodoChequePropioType::class, $metodoChequePropio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoChequePropio);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_propio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque_propio/new.html.twig', [
            'metodo_cheque_propio' => $metodoChequePropio,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_propio_show', methods: ['GET'])]
    public function show(MetodoChequePropio $metodoChequePropio): Response
    {
        return $this->render('finanzas/metodo_cheque_propio/show.html.twig', [
            'metodo_cheque_propio' => $metodoChequePropio,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_cheque_propio_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoChequePropio $metodoChequePropio, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoChequePropioType::class, $metodoChequePropio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_propio_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque_propio/edit.html.twig', [
            'metodo_cheque_propio' => $metodoChequePropio,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_propio_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoChequePropio $metodoChequePropio, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoChequePropio->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoChequePropio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_cheque_propio_index', [], Response::HTTP_SEE_OTHER);
    }
}
