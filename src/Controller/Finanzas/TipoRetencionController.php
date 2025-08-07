<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\TipoRetencion;
use App\Form\Finanzas\TipoRetencionType;
use App\Repository\Finanzas\TipoRetencionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/finanzas/tipo/retencion')]
final class TipoRetencionController extends AbstractController
{
    #[Route(name: 'app_finanzas_tipo_retencion_index', methods: ['GET'])]
    public function index(TipoRetencionRepository $tipoRetencionRepository): Response
    {
        return $this->render('finanzas/tipo_retencion/index.html.twig', [
            'tipo_retencions' => $tipoRetencionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_tipo_retencion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tipoRetencion = new TipoRetencion();
        $form = $this->createForm(TipoRetencionType::class, $tipoRetencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tipoRetencion);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_tipo_retencion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/tipo_retencion/new.html.twig', [
            'tipo_retencion' => $tipoRetencion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_tipo_retencion_show', methods: ['GET'])]
    public function show(TipoRetencion $tipoRetencion): Response
    {
        return $this->render('finanzas/tipo_retencion/show.html.twig', [
            'tipo_retencion' => $tipoRetencion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_tipo_retencion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TipoRetencion $tipoRetencion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TipoRetencionType::class, $tipoRetencion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_tipo_retencion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/tipo_retencion/edit.html.twig', [
            'tipo_retencion' => $tipoRetencion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_tipo_retencion_delete', methods: ['POST'])]
    public function delete(Request $request, TipoRetencion $tipoRetencion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoRetencion->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($tipoRetencion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_tipo_retencion_index', [], Response::HTTP_SEE_OTHER);
    }
}
