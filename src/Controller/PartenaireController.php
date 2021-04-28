<?php

namespace App\Controller;

use App\Data\DataMail;
use App\Entity\Partenaire;
use App\Form\ContactMType;
use App\Form\PartenaireType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenaireRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
/**
 * @Route("/partenaire")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaire_index", methods={"GET"})
     */
    public function index(): Response
    {
        $partenaires = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findAll();

        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }
    /**
     * @Route("/Front", name="partenaire_indexR", methods={"GET"})
     */
    public function indexR(): Response
    {
        $partenaires = $this->getDoctrine()
            ->getRepository(Partenaire::class)
            ->findAll();

        return $this->render('partenaire/indexR.html.twig', [
            'partenaires' => $partenaires,
        ]);
    }



    /**
     * @Route("/new", name="partenaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $partenaire = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $partenaire->upload();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();
            $this->addFlash('success', 'Partenaire ajouté!');
            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/new.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idP}", name="partenaire_show", methods={"GET"})
     */
    public function show(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

    /**
     * @Route("/{idP}/edit", name="partenaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Partenaire $partenaire): Response
    {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $partenaire->upload();
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Partenaire modifié!');
            return $this->redirectToRoute('partenaire_index');
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idP}", name="partenaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Partenaire $partenaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getIdP(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($partenaire);
            $entityManager->flush();
            $this->addFlash('success', 'Partenaire supprimé!');
        }

        return $this->redirectToRoute('partenaire_index');
    }


    /**
     * @param PatenaireRepository $Repository
     * @return Response
     * @Route ("stat", name="stat")
     */


    public function statistiques(PartenaireRepository $PartenaireRepository){
        $repository = $this->getDoctrine()->getRepository(Partenaire::class);
        $Partenaire = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;
        $es=0;


        foreach ($Partenaire as $Partenaire)
        {
            if (  $Partenaire->getDomaine()=="education")  :

                $rd+=1;
            elseif ($Partenaire->getDomaine()=="sante"):

                $qu+=1;
            else :
                $es +=1;

            endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Domaine', 'nombres'],
                ['education',     $rd],
                ['sante',      $qu],
                ['alimentation',   $es]
            ]
        );
        $pieChart->getOptions()->setTitle('Domaines des partenaires');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('1e6f5c');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('partenaire/statPart.html.twig', array('piechart' => $pieChart));
    }

    /**
     * @param PartenaireRepository $repository
     * @return Response
     * @Route ("list" , name="triM")
     */

    function OrderByMailQB(PartenaireRepository $repository)
    {

        $partenaires=$repository->OrderByMailQB();
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaires,
        ]);


    }
    /**
     * @Route("contactP", name="contactP")
     */
    public function contactP(Request $request, \Swift_Mailer $mailer, DataMail $dataMail,PartenaireRepository  $PartenaireRepository): Response
    {

        $partenaires = new Partenaire();
        $form = $this->createForm(ContactMType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaires);

            $ContactPType = $form->getData();
            //AA
            //$data = $this->create_my_pdf_data();
            // Create your file contents in the normal way, but don't write them to disk
            //AA
            //$data = create_my_pdf_data();

// Create the attachment with your data
            //AA
            //$attachment = new Swift_Attachment($data);
            /*$htmlContent = $this->renderView('partenaire/index.html.twig', [
                'partenaires' => $PartenaireRepository->findAll(),
            ]);*/
            //$data = \Swift_Attachment::fromPath($htmlContent, 'G:\COMBOwebSOS3\Skyway-Web\Skyway-Web\public\img', 'G:\COMBOwebSOS3');
            $message = (new \Swift_Message('SkyWay!'))
                ->setFrom($ContactPType['from'])
                ->setTo($ContactPType['to'])
                ->setBody(
                    $ContactPType['message'],
                    'text/plain'
                )
                // ->attach($attachment);
                //$message->attach($htmlContent);
                //->attachFromPath('G:\COMBOwebSOS3\Skyway-Web\Skyway-Web\public\img')

            ;
            //$data = $this->create_my_pdf_data();
            // Create your file contents in the normal way, but don't write them to disk
            //$data = create_my_pdf_data();

// Create the attachment with your data
            //$attachment = new Swift_Attachment($data, 'my-file.pdf', 'application/pdf');

// Attach it to the message
            //$message->attach($attachment);
            /*  foreach ($partenaire as $partenaire){
                  $htmlContent = $this->renderView('show.html.twig', array('partenaire' => $partenaire));

              }*/
            /*    $htmlContent = $this->renderView('partenaire/index.html.twig', array('partenaires' => $partenaires));

                $data = \Swift_Attachment::fromPath($htmlContent, 'letter.html', 'application/html');*/
            /* $attachment = (new Swift_Attachment())
               ->setFilename('my-file.pdf')

                 ->setBody($data)
             ;
             $message->attach($attachment);
             /********************/
            $mailer->send($message);
            $this->addFlash('success', 'MAIL Envoyé!');
            return $this->redirectToRoute('contactP');
        }









        $this->addFlash('info', 'MAIL  non Envoyé!');




        return $this->render('partenaire/contactP.html.twig', [

            'form' => $form->createView(),
        ]);


    }









}
