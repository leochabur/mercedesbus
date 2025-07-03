<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoEfectivo;
use App\Form\Finanzas\MetodoEfectivoType;
use App\Repository\Finanzas\MetodoEfectivoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/metodo/efectivo')]
final class MetodoEfectivoController extends AbstractController
{
    #[Route(name: 'app_finanzas_metodo_efectivo_index', methods: ['GET'])]
    public function index(MetodoEfectivoRepository $metodoEfectivoRepository): Response
    {
        return $this->render('finanzas/metodo_efectivo/index.html.twig', [
            'metodo_efectivos' => $metodoEfectivoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_efectivo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoEfectivo = new MetodoEfectivo();
        $form = $this->createForm(MetodoEfectivoType::class, $metodoEfectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoEfectivo);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_efectivo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_efectivo/new.html.twig', [
            'metodo_efectivo' => $metodoEfectivo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_efectivo_show', methods: ['GET'])]
    public function show(MetodoEfectivo $metodoEfectivo): Response
    {
        return $this->render('finanzas/metodo_efectivo/show.html.twig', [
            'metodo_efectivo' => $metodoEfectivo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_efectivo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoEfectivo $metodoEfectivo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoEfectivoType::class, $metodoEfectivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_efectivo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_efectivo/edit.html.twig', [
            'metodo_efectivo' => $metodoEfectivo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_efectivo_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoEfectivo $metodoEfectivo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoEfectivo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoEfectivo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_efectivo_index', [], Response::HTTP_SEE_OTHER);
    }
}
