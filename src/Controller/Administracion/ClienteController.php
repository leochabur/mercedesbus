<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\EnteComercial;
use App\Form\Administracion\ClienteType;
use App\Entity\Administracion\Proveedor;
use App\Form\Administracion\ProveedorType;
use App\Repository\Administracion\ClienteRepository;
use App\Repository\Administracion\ProveedorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/entidades')]
final class ClienteController extends AbstractController
{
    #[Route('/{code}', name: 'app_administracion_cliente_index', methods: ['GET'])]
    public function index($code, ClienteRepository $clienteRepository, ProveedorRepository $proveedorRepository): Response
    {
        if ($code == 'c')
        {
            $listado = $clienteRepository->findAll();
        }
        else
        {
            $listado = $proveedorRepository->findAll();
        }

        return $this->render('administracion/cliente/index.html.twig', [
            'clientes' => $listado,
            'code' => $code,
            'label' => ($code == 'c' ? 'Clientes' : 'Proveedores')
        ]);
    }

    #[Route('/{code}/comerciales/new', name: 'app_administracion_cliente_new', methods: ['GET', 'POST'])]
    public function new($code, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($code == 'c')
        {
            $ente = new Cliente();
            $form = $this->createForm(ClienteType::class, $ente);
        }
        else
        {
            $ente = new Proveedor();
            $form = $this->createForm(ProveedorType::class, $ente);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ente);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_cliente_index', ['code' => $code], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/cliente/new.html.twig', [
            'cliente' => $ente,
            'form' => $form,
            'code' => $code,
            'label' => ($code == 'c' ? 'Cliente' : 'Proveedor')
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
    public function edit(Request $request, EnteComercial $ente, EntityManagerInterface $entityManager): Response
    {
        $code = $ente->getCode();
        if ($code == 'c')
        {
            $form = $this->createForm(ClienteType::class, $ente);
        }
        else
        {
            $form = $this->createForm(ProveedorType::class, $ente);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/cliente/edit.html.twig', [
            'cliente' => $ente,
            'form' => $form,
            'code' => $code,
            'label' => ($code == 'c' ? 'Clientes' : 'Proveedores')
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
