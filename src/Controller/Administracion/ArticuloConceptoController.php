<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\ArticuloConcepto;
use App\Form\Administracion\ArticuloConceptoType;
use App\Repository\Administracion\ArticuloConceptoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/administracion/articulo/concepto')]
final class ArticuloConceptoController extends AbstractController
{
    #[Route(name: 'app_administracion_articulo_concepto_index', methods: ['GET'])]
    public function index(ArticuloConceptoRepository $articuloConceptoRepository): Response
    {
        return $this->render('administracion/articulo_concepto/index.html.twig', [
            'articulo_conceptos' => $articuloConceptoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_articulo_concepto_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $articuloConcepto = new ArticuloConcepto();
        $form = $this->createForm(ArticuloConceptoType::class, $articuloConcepto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($articuloConcepto);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_articulo_concepto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/articulo_concepto/new.html.twig', [
            'articulo_concepto' => $articuloConcepto,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_articulo_concepto_show', methods: ['GET'])]
    public function show(ArticuloConcepto $articuloConcepto): Response
    {
        return $this->render('administracion/articulo_concepto/show.html.twig', [
            'articulo_concepto' => $articuloConcepto,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_articulo_concepto_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ArticuloConcepto $articuloConcepto, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticuloConceptoType::class, $articuloConcepto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_articulo_concepto_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/articulo_concepto/edit.html.twig', [
            'articulo_concepto' => $articuloConcepto,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_articulo_concepto_delete', methods: ['POST'])]
    public function delete(Request $request, ArticuloConcepto $articuloConcepto, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$articuloConcepto->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($articuloConcepto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_articulo_concepto_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/api/articulos', name: 'api_articulos', methods: ['GET'])]
    public function getArticulos(ArticuloConceptoRepository $articuloRepository): JsonResponse
    {
        $articulos = $articuloRepository->findAll(); // O puedes filtrar/paginar si la lista es enorme

        $data = [];
        foreach ($articulos as $articulo) {
            $data[] = [
                'id' => $articulo->getId(),
                'nombre' => $articulo->getNombre(),
                // Añade otros campos si los necesitas en el frontend
            ];
        }

        return new JsonResponse($data);
    }
}
