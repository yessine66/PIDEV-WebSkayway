<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Form\PartenaireType;
use App\Repository\PartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($partenaire);
            $entityManager->flush();

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
            $this->getDoctrine()->getManager()->flush();

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
        $pieChart->getOptions()->setTitle('Top domaines');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
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








}
