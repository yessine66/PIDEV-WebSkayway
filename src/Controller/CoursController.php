<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cours")
 */
class CoursController extends AbstractController
{
    /**
     * @Route("/", name="coursF_index", methods={"GET"})
     */
    public function index(): Response
    {
        $cours = $this->getDoctrine()
            ->getRepository(Cours::class)
            ->findAll();

        return $this->render('cours/indexF.html.twig', [
            'cours' => $cours,
        ]);
    }
    /**
     * @Route("/index", name="cours_index", methods={"GET"})
     */
    public function test(): Response
    {
        $cours = $this->getDoctrine()
            ->getRepository(Cours::class)
            ->findAll();

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
        ]);
    }


    /**
     * @Route("/new", name="cours_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cour);
            $entityManager->flush();

            return $this->redirectToRoute('cours_index');
        }

        return $this->render('cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idC}", name="cours_show", methods={"GET"})
     */
    public function show(Cours $cour): Response
    {
        return $this->render('cours/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    /**
     * @Route("/{idC}/edit", name="cours_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cours $cour): Response
    {
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cours_index');
        }

        return $this->render('cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idC}", name="cours_delete", methods={"POST"})
     */
    public function delete(Request $request, Cours $cour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getIdC(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cours_index');
    }
}
