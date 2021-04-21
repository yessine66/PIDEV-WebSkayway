<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Form\FeedbackType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/feedback")
 */
class FeedbackController extends AbstractController
{
    /**
     * @Route("/", name="feedback_index", methods={"GET"})
     */
    public function index(): Response
    {
        $feedback = $this->getDoctrine()
            ->getRepository(Feedback::class)
            ->findAll();

        return $this->render('feedback/index.html.twig', [
            'feedback' => $feedback,
        ]);
    }
    /**
     * @Route("/index", name="feedbackF_index", methods={"GET"})
     */
    public function indexf(): Response
    {
        $feedbacks = $this->getDoctrine()
            ->getRepository(Feedback::class)
            ->findAll();

        return $this->render('feedback/indexF.html.twig', [
            'feedbacks' => $feedbacks,
        ]);
    }

    /**
     * @Route("/new", name="feedback_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($feedback);
            $entityManager->flush();

            return $this->redirectToRoute('feedbackF_index');
        }

        return $this->render('feedback/new.html.twig', [
            'feedback' => $feedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idF}", name="feedback_show", methods={"GET"})
     */
    public function show(Feedback $feedback): Response
    {
        return $this->render('feedback/show.html.twig', [
            'feedback' => $feedback,
        ]);
    }
    /**
     * @Route("/index/{idF}", name="feedback_showF", methods={"GET"})
     */
    public function showF(Feedback $feedback): Response
    {
        return $this->render('feedback/showF.html.twig', [
            'feedback' => $feedback,
        ]);
    }

    /**
     * @Route("/index/{idF}/edit", name="feedback_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Feedback $feedback): Response
    {
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('feedbackF_index');
        }

        return $this->render('feedback/edit.html.twig', [
            'feedback' => $feedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/index/{idF}", name="feedback_delete", methods={"POST"})
     */
    public function delete(Request $request, Feedback $feedback): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feedback->getIdF(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($feedback);
            $entityManager->flush();
        }

        return $this->redirectToRoute('feedbackF_index');
    }
}
