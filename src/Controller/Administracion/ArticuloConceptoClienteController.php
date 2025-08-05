<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ArticuloConceptoCliente;
use App\Form\Administracion\ArticuloConceptoClienteType;
use App\Repository\Administracion\ArticuloConceptoClienteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/articulo/concepto/cliente')]
final class ArticuloConceptoClienteController extends AbstractController
{
    #[Route(name: 'app_administracion_articulo_concepto_cliente_index', methods: ['GET'])]
    public function index(ArticuloConceptoClienteRepository $articuloConceptoClienteRepository): Response
    {
        return $this->render('administracion/articulo_concepto_cliente/index.html.twig', [
            'articulo_concepto_clientes' => $articuloConceptoClienteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_articulo_concepto_cliente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $articuloConceptoCliente = new ArticuloConceptoCliente();
        $form = $this->createForm(ArticuloConceptoClienteType::class, $articuloConceptoCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($articuloConceptoCliente);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_articulo_concepto_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/articulo_concepto_cliente/new.html.twig', [
            'articulo_concepto_cliente' => $articuloConceptoCliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_articulo_concepto_cliente_show', methods: ['GET'])]
    public function show(ArticuloConceptoCliente $articuloConceptoCliente): Response
    {
        return $this->render('administracion/articulo_concepto_cliente/show.html.twig', [
            'articulo_concepto_cliente' => $articuloConceptoCliente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_articulo_concepto_cliente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ArticuloConceptoCliente $articuloConceptoCliente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticuloConceptoClienteType::class, $articuloConceptoCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_articulo_concepto_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/articulo_concepto_cliente/edit.html.twig', [
            'articulo_concepto_cliente' => $articuloConceptoCliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_articulo_concepto_cliente_delete', methods: ['POST'])]
    public function delete(Request $request, ArticuloConceptoCliente $articuloConceptoCliente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$articuloConceptoCliente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($articuloConceptoCliente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_articulo_concepto_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
