<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Admin;
use App\Entity\Apprenant;
use App\Entity\Enseignant;
use App\Entity\Utilisateur;
use App\Form\ApprenantType;
use App\Form\EnseignantType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;


/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/index", name="reclamation_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    /**
     * @Route("/", name="reclamationF_index", methods={"GET"})
     */
    public function indexf(): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/indexF.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

     /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request, MailerInterface $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $idUserCo= $this->getUser();
           // dd($idUserCo);
            $reclamation->setId($idUserCo);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $email = (new Email())
                    ->from('ibtihelawledsoula@gmail.com')
                    ->to('yessine.fraj@esprit.tn')
                    ->subject('New Claim '.$form["objet"]->getData().'')
                    ->text('Sending emails is fun again!')
                    ->html('<p> A new claim has been created 
                               <br> Text='.$reclamation->getTextR().'
                               <br> Date='.$reclamation->getDateEnvoi().'
                             <br>  Cours='.$reclamation->getCours().'
                             <br> Enseignant='.$reclamation->getEnseignant().' </p>');


        $mailer->send($email);

            return $this->redirectToRoute('reclamationF_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);

    }
    /**

     * @Route("/consulterRec", name="contrat", methods={"GET"})
     */
    public function consulterContrat(ReclamationRepository  $or): Response
    {


        $rec=$or->findAll() ; // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reclamation/rec.html.twig', [
            'reclamations' => $rec,

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
     * @Route("/index/{idRec}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

        /**
         * @Route("/{idRec}", name="reclamation_showF", methods={"GET"})
         */
        public function showF(Reclamation $reclamation): Response
    {

        return $this->render('reclamation/showF.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    /**
     * @Route("/trie/nom", name="sortbytitleasc")
     */
    public function sortByTitleASC(ReclamationRepository  $reclamationRepository): Response
    {

        $reclamations=$reclamationRepository->sortByTitleASC();
        // $events=$eventRepository->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/{idRec}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->info('Votre réclamation est modifié avec succés!');
            return $this->redirectToRoute('reclamationF_index');

        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRec}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation,FlashyNotifier $flashy): Response
    {

        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdRec(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }
        $flashy->warning('Votre réclamation est supprimé!', 'http://your-awesome-link.com');
        return $this->redirectToRoute('reclamationF_index');
    }




}
