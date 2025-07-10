<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ComprobanteProveedor;
use App\Form\Administracion\ComprobanteProveedorType;
use App\Repository\Administracion\ComprobanteProveedorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/comprobante/proveedor')]
final class ComprobanteProveedorController extends AbstractController
{
    #[Route(name: 'app_administracion_comprobante_proveedor_index', methods: ['GET'])]
    public function index(ComprobanteProveedorRepository $comprobanteProveedorRepository): Response
    {
        return $this->render('administracion/comprobante_proveedor/index.html.twig', [
            'comprobante_proveedors' => $comprobanteProveedorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_comprobante_proveedor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $comprobanteProveedor = new ComprobanteProveedor();
        $form = $this->createForm(ComprobanteProveedorType::class, $comprobanteProveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comprobanteProveedor);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_comprobante_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/comprobante_proveedor/new.html.twig', [
            'comprobante_proveedor' => $comprobanteProveedor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_comprobante_proveedor_show', methods: ['GET'])]
    public function show(ComprobanteProveedor $comprobanteProveedor): Response
    {
        return $this->render('administracion/comprobante_proveedor/show.html.twig', [
            'comprobante_proveedor' => $comprobanteProveedor,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_comprobante_proveedor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ComprobanteProveedor $comprobanteProveedor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ComprobanteProveedorType::class, $comprobanteProveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_comprobante_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/comprobante_proveedor/edit.html.twig', [
            'comprobante_proveedor' => $comprobanteProveedor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_comprobante_proveedor_delete', methods: ['POST'])]
    public function delete(Request $request, ComprobanteProveedor $comprobanteProveedor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comprobanteProveedor->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($comprobanteProveedor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_comprobante_proveedor_index', [], Response::HTTP_SEE_OTHER);
    }
}
