<?php

namespace App\Controller;

use App\Data\DataMail;
use App\Entity\Partenaire;
use App\Entity\Promotion;
use App\Form\ContactMType;
use App\Form\PartenaireType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PartenaireRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
/**********************/

use App\Repository\UtilisateurRepository;

use App\Repository\PromotionRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;
/**
/**************************/
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

    /******************************************************/
    //JSONNN


    /**
     * @Route ("add", name="partenaire_add", methods={"GET","POST"})
     * @Method("POST")
     */

    public function ajouterPartenaireAction(Request $request)
    {
        $partenaire = new Partenaire();
        $nomP = $request->query->get("nomP");
        $domaine = $request->query->get("domaine");
        $dateP = $request->query->get("dateP");
        $mailp= $request->query->get("mailp");
        $logop = $request->query->get("logop");
        // $idP = $request->query->get("idP");
        $em = $this->getDoctrine()->getManager();
        //$date = new \DateTime('now');

        $partenaire->setNomP($nomP);
        $partenaire->setDomaine($domaine);
        $partenaire->setDateP($dateP);
        $partenaire->setMailp($mailp);
        $partenaire->setLogop($logop);
        // $promotion->setDatef($idP);
        // $promotion->setEtat(0);

        $em->persist($partenaire);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($partenaire);
        return new JsonResponse($formatted);

    }
    /**
     * @Route ("del", name="partenaire_del", methods={"GET","POST"})
     * @Method("DELETE")
     */

    public function supprimerPartenaireAction(Request $request)
    {
        $idP= $request->get("idP");

        $em = $this->getDoctrine()->getManager();
        $partenaire= $em->getRepository( Partenaire::class)->find($idP);
        if($partenaire!=null ) {
            $em->remove($partenaire);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("partenaire a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id partenaire invalide.");

    }
    /**
     * @Route ("up", name="partenaire_up")
     * @Method("PUT")
     */

    public function modifierPartenaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $partenaire= $this->getDoctrine()->getManager()
            ->getRepository(Partenaire::class)
            ->find($request->get("idP"));

        $partenaire->setNomP($request->get("nomP"));
        $partenaire->setDomaine($request->get("domaine"));
        $partenaire->setDateP($request->get("dateP"));
        $partenaire->setMailp($request->get("mailp"));
        $partenaire->setLogop($request->get("logop"));
        // $promotion->setIdP($request->get("idP"));

        $em->persist($partenaire);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($partenaire);
        return new JsonResponse("partenaire a ete modifiee avec success.");




    }


    /**
     * @Route ("lis", name="partenaire_lis")
     * @param PartenaireRepository $repository
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function allPartenaireAction(PartenaireRepository $repository,Request $request,SerializerInterface $serializer)
    {
        $partenaire = $this->getDoctrine()->getManager()->getRepository(Partenaire::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($partenaire);

        return new JsonResponse($formatted);
        // return new JsonResponse($json);
    }
    /**
     * @Route("det", name="detail_partenaire")
     * @Method("GET")
     */

    //Detail Reclamation
    public function detailPartenaireAction(Request $request)
    {
        $idP = $request->get("idP");

        $em = $this->getDoctrine()->getManager();
        $partenaire = $this->getDoctrine()->getManager()->getRepository(Partenaire::class)->find($idP);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($partenaire);
        $x=new JsonResponse($formatted);
        // dd($x->getContent());
        return new JsonResponse($formatted);
    }





}