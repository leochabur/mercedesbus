<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\Proveedor;
use App\Form\Administracion\ProveedorType;
use App\Repository\Administracion\ProveedorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/proveedor')]
final class ProveedorController extends AbstractController
{
    #[Route(name: 'app_administracion_proveedor_index', methods: ['GET'])]
    public function index(ProveedorRepository $proveedorRepository): Response
    {
        return $this->render('administracion/proveedor/index.html.twig', [
            'proveedors' => $proveedorRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_proveedor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $proveedor = new Proveedor();
        $form = $this->createForm(ProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($proveedor);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/proveedor/new.html.twig', [
            'proveedor' => $proveedor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_proveedor_show', methods: ['GET'])]
    public function show(Proveedor $proveedor): Response
    {
        return $this->render('administracion/proveedor/show.html.twig', [
            'proveedor' => $proveedor,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_proveedor_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proveedor $proveedor, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/proveedor/edit.html.twig', [
            'proveedor' => $proveedor,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_proveedor_delete', methods: ['POST'])]
    public function delete(Request $request, Proveedor $proveedor, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proveedor->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($proveedor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_proveedor_index', [], Response::HTTP_SEE_OTHER);
    }
}
