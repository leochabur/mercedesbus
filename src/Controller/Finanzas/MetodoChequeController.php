<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoCheque;
use App\Form\Finanzas\MetodoChequeType;
use App\Repository\Finanzas\MetodoChequeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/metodo/cheque')]
final class MetodoChequeController extends AbstractController
{
    #[Route(name: 'app_finanzas_metodo_cheque_index', methods: ['GET'])]
    public function index(MetodoChequeRepository $metodoChequeRepository): Response
    {
        return $this->render('finanzas/metodo_cheque/index.html.twig', [
            'metodo_cheques' => $metodoChequeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_cheque_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoCheque = new MetodoCheque();
        $form = $this->createForm(MetodoChequeType::class, $metodoCheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoCheque);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque/new.html.twig', [
            'metodo_cheque' => $metodoCheque,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_show', methods: ['GET'])]
    public function show(MetodoCheque $metodoCheque): Response
    {
        return $this->render('finanzas/metodo_cheque/show.html.twig', [
            'metodo_cheque' => $metodoCheque,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_cheque_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoCheque $metodoCheque, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoChequeType::class, $metodoCheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque/edit.html.twig', [
            'metodo_cheque' => $metodoCheque,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoCheque $metodoCheque, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoCheque->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoCheque);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_cheque_index', [], Response::HTTP_SEE_OTHER);
    }
}
