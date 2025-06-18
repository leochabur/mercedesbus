<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\Cliente;
use App\Form\Administracion\ClienteType;
use App\Repository\Administracion\ClienteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/cliente')]
final class ClienteController extends AbstractController
{
    #[Route(name: 'app_administracion_cliente_index', methods: ['GET'])]
    public function index(ClienteRepository $clienteRepository): Response
    {
        return $this->render('administracion/cliente/index.html.twig', [
            'clientes' => $clienteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_cliente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cliente = new Cliente();
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cliente);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/cliente/new.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_cliente_show', methods: ['GET'])]
    public function show(Cliente $cliente): Response
    {
        return $this->render('administracion/cliente/show.html.twig', [
            'cliente' => $cliente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_cliente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cliente $cliente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/cliente/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_cliente_delete', methods: ['POST'])]
    public function delete(Request $request, Cliente $cliente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cliente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cliente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
