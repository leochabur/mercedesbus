<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\MetodoChequeCartera;
use App\Form\Finanzas\MetodoChequeCarteraType;
use App\Repository\Finanzas\MetodoChequeCarteraRepository;
use App\Repository\Finanzas\MetodoChequeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; 

#[Route('/finanzas/metodo/cheque/cartera')]
final class MetodoChequeCarteraController extends AbstractController
{
    #[Route(name: 'app_finanzas_metodo_cheque_cartera_index', methods: ['GET'])]
    public function index(MetodoChequeRepository $metodoChequeRepository): Response
    {
        return $this->render('finanzas/metodo_cheque_cartera/index.html.twig', [
            'metodo_cheque_carteras' => $metodoChequeRepository->getAllValores(),
        ]);
    }

    #[Route('/new', name: 'app_finanzas_metodo_cheque_cartera_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $metodoChequeCartera = new MetodoChequeCartera();
        $form = $this->createForm(MetodoChequeCarteraType::class, $metodoChequeCartera);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($metodoChequeCartera);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_cartera_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque_cartera/new.html.twig', [
            'metodo_cheque_cartera' => $metodoChequeCartera,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_cartera_show', methods: ['GET'])]
    public function show(MetodoChequeCartera $metodoChequeCartera): Response
    {
        return $this->render('finanzas/metodo_cheque_cartera/show.html.twig', [
            'metodo_cheque_cartera' => $metodoChequeCartera,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_metodo_cheque_cartera_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MetodoChequeCartera $metodoChequeCartera, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MetodoChequeCarteraType::class, $metodoChequeCartera);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_metodo_cheque_cartera_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/metodo_cheque_cartera/edit.html.twig', [
            'metodo_cheque_cartera' => $metodoChequeCartera,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_metodo_cheque_cartera_delete', methods: ['POST'])]
    public function delete(Request $request, MetodoChequeCartera $metodoChequeCartera, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metodoChequeCartera->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($metodoChequeCartera);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_metodo_cheque_cartera_index', [], Response::HTTP_SEE_OTHER);
    }
}
