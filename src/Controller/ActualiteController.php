<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ActualiteController extends AbstractController
{
    /**
     * @Route("/actualite", name="actualite_index", methods={"GET"})
     */
    public function index(): Response
    {
        $actualites = $this->getDoctrine()
            ->getRepository(Actualite::class)
            ->findAll();

        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites,
        ]);
    }

    /**
     * @Route("/actualite/index", name="actualite_indexF", methods={"GET"})
     */
    public function indexF(): Response
    {
        $actualites = $this->getDoctrine()
            ->getRepository(Actualite::class)
            ->findAll();

        return $this->render('actualite/indexF.html.twig', [
            'actualites' => $actualites,
        ]);
    }

    /**
     * @Route("/actualite/new", name="actualite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $actualite = new Actualite();
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actualite);
            $entityManager->flush();

            return $this->redirectToRoute('actualite_index');
        }

        return $this->render('actualite/new.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/actualite/{idAc}", name="actualite_show", methods={"GET"})
     */
    public function show(Actualite $actualite): Response
    {
        return $this->render('actualite/show.html.twig', [
            'actualite' => $actualite,
        ]);
    }
    /**
     * @Route("/actualite/index/{idAc}", name="actualite_showF", methods={"GET"})
     */
    public function showF(Actualite $actualite): Response
    {
        return $this->render('actualite/showF.html.twig', [
            'actualite' => $actualite,
        ]);
    }

    /**
     * @Route("/actualite/{idAc}/edit", name="actualite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Actualite $actualite): Response
    {
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('actualite_index');
        }

        return $this->render('actualite/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/actualite/{idAc}", name="actualite_delete", methods={"POST"})
     */
    public function delete(Request $request, Actualite $actualite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getIdAc(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('actualite_index');
    }

    /**
     * @Route("/evenement/index/{idEv}", name="evenement_showEF", methods={"GET"})
     */
    public function showEF(Evenement $evenement): Response
    {
        return $this->render('evenement/showF.html.twig', [
            'evenement' => $evenement,
        ]);
    }
}
