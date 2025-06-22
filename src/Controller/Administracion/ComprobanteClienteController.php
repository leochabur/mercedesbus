<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ComprobanteCliente;
use App\Form\Administracion\ComprobanteClienteType;
use App\Repository\Administracion\ComprobanteClienteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/comprobante/cliente')]
final class ComprobanteClienteController extends AbstractController
{
    #[Route(name: 'app_administracion_comprobante_cliente_index', methods: ['GET'])]
    public function index(ComprobanteClienteRepository $comprobanteClienteRepository): Response
    {
        return $this->render('administracion/comprobante_cliente/index.html.twig', [
            'comprobante_clientes' => $comprobanteClienteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_comprobante_cliente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $comprobanteCliente = new ComprobanteCliente();
        $form = $this->createForm(ComprobanteClienteType::class, $comprobanteCliente);
        $form->handleRequest($request);



        if ($form->isSubmitted())
        {
            $comprobanteCliente->updateValues();
            if ($form->isValid()) 
            {
                $entityManager->persist($comprobanteCliente);
                $entityManager->flush();

                return $this->redirectToRoute('app_administracion_comprobante_cliente_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('administracion/comprobante_cliente/new.html.twig', [
            'comprobante_cliente' => $comprobanteCliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_comprobante_cliente_show', methods: ['GET'])]
    public function show(ComprobanteCliente $comprobanteCliente): Response
    {
        return $this->render('administracion/comprobante_cliente/show.html.twig', [
            'comprobante_cliente' => $comprobanteCliente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_comprobante_cliente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ComprobanteCliente $comprobanteCliente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ComprobanteClienteType::class, $comprobanteCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_comprobante_cliente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/comprobante_cliente/edit.html.twig', [
            'comprobante_cliente' => $comprobanteCliente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_comprobante_cliente_delete', methods: ['POST'])]
    public function delete(Request $request, ComprobanteCliente $comprobanteCliente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comprobanteCliente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($comprobanteCliente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_comprobante_cliente_index', [], Response::HTTP_SEE_OTHER);
    }
}
