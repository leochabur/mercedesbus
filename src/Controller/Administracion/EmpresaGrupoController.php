<?php

namespace App\Controller\Administracion;

use App\Entity\Administracion\EmpresaGrupo;
use App\Form\Administracion\EmpresaGrupoType;
use App\Repository\Administracion\EmpresaGrupoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/administracion/empresa/grupo')]
final class EmpresaGrupoController extends AbstractController
{
    #[Route(name: 'app_administracion_empresa_grupo_index', methods: ['GET'])]
    public function index(EmpresaGrupoRepository $empresaGrupoRepository): Response
    {
        return $this->render('administracion/empresa_grupo/index.html.twig', [
            'empresa_grupos' => $empresaGrupoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_administracion_empresa_grupo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $empresaGrupo = new EmpresaGrupo();
        $form = $this->createForm(EmpresaGrupoType::class, $empresaGrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($empresaGrupo);
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_empresa_grupo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/empresa_grupo/new.html.twig', [
            'empresa_grupo' => $empresaGrupo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_empresa_grupo_show', methods: ['GET'])]
    public function show(EmpresaGrupo $empresaGrupo): Response
    {
        return $this->render('administracion/empresa_grupo/show.html.twig', [
            'empresa_grupo' => $empresaGrupo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_administracion_empresa_grupo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EmpresaGrupo $empresaGrupo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmpresaGrupoType::class, $empresaGrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_administracion_empresa_grupo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('administracion/empresa_grupo/edit.html.twig', [
            'empresa_grupo' => $empresaGrupo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_administracion_empresa_grupo_delete', methods: ['POST'])]
    public function delete(Request $request, EmpresaGrupo $empresaGrupo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empresaGrupo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($empresaGrupo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_administracion_empresa_grupo_index', [], Response::HTTP_SEE_OTHER);
    }
}
