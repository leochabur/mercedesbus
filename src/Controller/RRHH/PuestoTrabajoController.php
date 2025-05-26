<?php

namespace App\Controller\RRHH;

use App\Entity\RRHH\PuestoTrabajo;
use App\Form\RRHH\PuestoTrabajoType;
use App\Repository\RRHH\PuestoTrabajoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/rrhh/puesto/trabajo')]

final class PuestoTrabajoController extends AbstractController
{
    #[Route(name: 'app_r_r_h_h_puesto_trabajo_index', methods: ['GET'])]
    public function index(PuestoTrabajoRepository $puestoTrabajoRepository): Response
    {
        return $this->render('rrhh/puesto_trabajo/index.html.twig', [
            'puesto_trabajos' => $puestoTrabajoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_r_r_h_h_puesto_trabajo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $puestoTrabajo = new PuestoTrabajo();
        $form = $this->createForm(PuestoTrabajoType::class, $puestoTrabajo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($puestoTrabajo);
            $entityManager->flush();

            return $this->redirectToRoute('app_r_r_h_h_puesto_trabajo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rrhh/puesto_trabajo/new.html.twig', [
            'puesto_trabajo' => $puestoTrabajo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_r_h_h_puesto_trabajo_show', methods: ['GET'])]
    public function show(PuestoTrabajo $puestoTrabajo): Response
    {
        return $this->render('rrhh/puesto_trabajo/show.html.twig', [
            'puesto_trabajo' => $puestoTrabajo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_r_r_h_h_puesto_trabajo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PuestoTrabajo $puestoTrabajo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PuestoTrabajoType::class, $puestoTrabajo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_r_r_h_h_puesto_trabajo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rrhh/puesto_trabajo/edit.html.twig', [
            'puesto_trabajo' => $puestoTrabajo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_r_r_h_h_puesto_trabajo_delete', methods: ['POST'])]
    public function delete(Request $request, PuestoTrabajo $puestoTrabajo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$puestoTrabajo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($puestoTrabajo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_r_r_h_h_puesto_trabajo_index', [], Response::HTTP_SEE_OTHER);
    }
}
