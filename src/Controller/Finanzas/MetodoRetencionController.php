<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoRetencion;
use App\Form\Finanzas\MetodoRetencionType;
use App\Repository\Finanzas\MetodoRetencionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/metodo/retencion')]
final class MetodoRetencionController extends AbstractController
{
    #[Route(name: 'app_finanzas_metodo_retencion_index', methods: ['GET'])]
    public function index(MetodoRetencionRepository $metodoRetencionRepository): Response
    {
        return $this->render('finanzas/metodo_retencion/index.html.twig', [
            'metodo_retencions' => $metodoRetencionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_retencion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoRetencion = new MetodoRetencion();
        $form = $this->createForm(MetodoRetencionType::class, $metodoRetencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoRetencion);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_retencion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_retencion/new.html.twig', [
            'metodo_retencion' => $metodoRetencion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_retencion_show', methods: ['GET'])]
    public function show(MetodoRetencion $metodoRetencion): Response
    {
        return $this->render('finanzas/metodo_retencion/show.html.twig', [
            'metodo_retencion' => $metodoRetencion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_retencion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoRetencion $metodoRetencion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoRetencionType::class, $metodoRetencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_retencion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_retencion/edit.html.twig', [
            'metodo_retencion' => $metodoRetencion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_retencion_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoRetencion $metodoRetencion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoRetencion->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoRetencion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_retencion_index', [], Response::HTTP_SEE_OTHER);
    }
}
