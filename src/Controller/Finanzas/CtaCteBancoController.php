<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\CtaCteBanco;
use App\Form\Finanzas\CtaCteBancoType;
use App\Repository\Finanzas\CtaCteBancoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/cta/cte/banco')]
final class CtaCteBancoController extends AbstractController
{
    #[Route(name: 'app_finanzas_cta_cte_banco_index', methods: ['GET'])]
    public function index(CtaCteBancoRepository $ctaCteBancoRepository): Response
    {
        return $this->render('finanzas/cta_cte_banco/index.html.twig', [
            'cta_cte_bancos' => $ctaCteBancoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_cta_cte_banco_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ctaCteBanco = new CtaCteBanco();
        $form = $this->createForm(CtaCteBancoType::class, $ctaCteBanco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ctaCteBanco);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_banco_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte_banco/new.html.twig', [
            'cta_cte_banco' => $ctaCteBanco,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_banco_show', methods: ['GET'])]
    public function show(CtaCteBanco $ctaCteBanco): Response
    {
        return $this->render('finanzas/cta_cte_banco/show.html.twig', [
            'cta_cte_banco' => $ctaCteBanco,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_cta_cte_banco_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CtaCteBanco $ctaCteBanco, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CtaCteBancoType::class, $ctaCteBanco);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_banco_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte_banco/edit.html.twig', [
            'cta_cte_banco' => $ctaCteBanco,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_banco_delete', methods: ['POST'])]
    public function delete(Request $request, CtaCteBanco $ctaCteBanco, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ctaCteBanco->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($ctaCteBanco);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_cta_cte_banco_index', [], Response::HTTP_SEE_OTHER);
    }
}
