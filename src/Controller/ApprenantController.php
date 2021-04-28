<?php

namespace App\Controller;

use App\Entity\Apprenant;
use App\Form\ApprenantType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/apprenant")
 */
class ApprenantController extends AbstractController
{
    /**
     * @Route("/", name="apprenant_index", methods={"GET"})
     */
    public function index(): Response
    {
        $apprenants = $this->getDoctrine()
            ->getRepository(Apprenant::class)
            ->findAll();

        return $this->render('apprenant/index.html.twig', [
            'apprenants' => $apprenants,
        ]);
    }

    /**
     * @Route("/new", name="apprenant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $apprenant = new Apprenant();
        $form = $this->createForm(ApprenantType::class, $apprenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($apprenant);
            $entityManager->flush();

            return $this->redirectToRoute('apprenant_index');
        }

        return $this->render('apprenant/new.html.twig', [
            'apprenant' => $apprenant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idApp}", name="apprenant_show", methods={"GET"})
     */
    public function show(Apprenant $apprenant): Response
    {
        return $this->render('apprenant/show.html.twig', [
            'apprenant' => $apprenant,
        ]);
    }

    /**
     * @Route("/{idApp}/edit", name="apprenant_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Apprenant $apprenant): Response
    {
        $form = $this->createForm(ApprenantType::class, $apprenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('apprenant_index');
        }

        return $this->render('apprenant/edit.html.twig', [
            'apprenant' => $apprenant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idApp}", name="apprenant_delete", methods={"POST"})
     */
    public function delete(Request $request, Apprenant $apprenant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$apprenant->getIdApp(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($apprenant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('apprenant_index');
    }
}
