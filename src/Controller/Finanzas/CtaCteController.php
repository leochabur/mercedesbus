<?php

namespace App\Controller\Finanzas;

use App\Entity\Finanzas\CtaCte;
use App\Form\Finanzas\CtaCteType;
use App\Repository\Finanzas\CtaCteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Administracion\Cliente;
use App\Entity\Administracion\Proveedor;

#[Route('/finanzas/ctacte')]

final class CtaCteController extends AbstractController
{

    private function getFormSelect($type = 'c')
    {
        return $this->createFormBuilder()
                    ->add('ente', 
                           EntityType::class, 
                           [
                                'class' => ($type == 'c' ? Cliente::class : Proveedor::class),
                            ])
                    ->add('empresa_grupo', 
                           EntityType::class, 
                           [
                                'class' => \App\Entity\Administracion\EmpresaGrupo::class,
                            ])
                    ->getForm();
    }

    #[Route('/{t}', name:'app_finanzas_cta_cte_index', methods: ['GET', 'POST'])]
    public function index($t, Request $request, CtaCteRepository $ctaCteRepository): Response
    {

        $form = $this->getFormSelect($t);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            $ctacte = $ctaCteRepository->getCtaCteEntidad($data['ente'], $data['empresa_grupo']);
            return $this->render('finanzas/cta_cte/index.html.twig', 
                                [
                                    'cta_ctes' => $ctaCteRepository->findAll(), 
                                    'form' => $form->createView(),
                                    'ctacte' => $ctacte
                                ]);
        }


        return $this->render('finanzas/cta_cte/index.html.twig', [
            'cta_ctes' => $ctaCteRepository->findAll(), 'form' => $form->createView()
        ]);
    }

    #[Route('/new', name: 'app_finanzas_cta_cte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ctaCte = new CtaCte();
        $form = $this->createForm(CtaCteType::class, $ctaCte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ctaCte);
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte/new.html.twig', [
            'cta_cte' => $ctaCte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_show', methods: ['GET'])]
    public function show(CtaCte $ctaCte): Response
    {
        return $this->render('finanzas/cta_cte/show.html.twig', [
            'cta_cte' => $ctaCte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_finanzas_cta_cte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CtaCte $ctaCte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CtaCteType::class, $ctaCte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('finanzas/cta_cte/edit.html.twig', [
            'cta_cte' => $ctaCte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_finanzas_cta_cte_delete', methods: ['POST'])]
    public function delete(Request $request, CtaCte $ctaCte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ctaCte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($ctaCte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_finanzas_cta_cte_index', [], Response::HTTP_SEE_OTHER);
    }
}
