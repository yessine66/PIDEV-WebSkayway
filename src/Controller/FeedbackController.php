<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Form\FeedbackType;
use App\Repository\ReclamationRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FeedbackRepository;
use Knp\Component\Pager\PaginatorInterface;

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
    public function indexf(FeedbackRepository $feedbackRepository,PaginatorInterface $paginator,Request $request): Response
    {


            $data = $paginator->paginate(
            $feedbackRepository->findAll() ,
            $request->query->getInt('page' , 1) ,
            3
        );
        return $this->render('feedback/indexF.html.twig', [
            'feedback' => $data,
        ]);
    }
    /**

     * @Route("/consulterFeed", name="contrat", methods={"GET"})
     */
    public function consulterContrat(FeedbackRepository $or): Response
    {


        $rec=$or->findAll() ; // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('feedback/feed.html.twig', [
            'feedbacks' => $rec,

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
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
    /**
     * @Route("/recherche" , name="Recherche",methods={"GET","POST"})
     */
    function Recherche(Request $request, FeedbackRepository $feedbackRepository): Response
    {
        $data=$request->get('Recherche');
        $feedbacks=$feedbackRepository->findBy(['avis'=>$data]);
        return $this->render('feedback/indexF.html.twig',[
            'feedback'=>$feedbacks ]);

    }

}
