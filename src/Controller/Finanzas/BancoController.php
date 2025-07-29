<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\Banco;
use App\Form\Finanzas\BancoType;
use App\Repository\Finanzas\BancoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/banco')]
final class BancoController extends AbstractController
{
    #[Route(name: 'app_finanzas_banco_index', methods: ['GET'])]
    public function index(BancoRepository $bancoRepository): Response
    {
        return $this->render('finanzas/banco/index.html.twig', [
            'bancos' => $bancoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_banco_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $banco = new Banco();
        $form = $this->createForm(BancoType::class, $banco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($banco);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_banco_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/banco/new.html.twig', [
            'banco' => $banco,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_banco_show', methods: ['GET'])]
    public function show(Banco $banco): Response
    {
        return $this->render('finanzas/banco/show.html.twig', [
            'banco' => $banco,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_banco_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Banco $banco, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BancoType::class, $banco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_banco_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/banco/edit.html.twig', [
            'banco' => $banco,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_banco_delete', methods: ['POST'])]
    public function delete(Request $request, Banco $banco, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$banco->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($banco);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_banco_index', [], Response::HTTP_SEE_OTHER);
    }
}
