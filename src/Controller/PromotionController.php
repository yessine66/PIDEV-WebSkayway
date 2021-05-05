<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Form\SearchForm;
use App\Repository\PartenaireRepository;
use App\Repository\UtilisateurRepository;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PromotionRepository;


/**
 * @Route("/promotion")
 */
class PromotionController extends AbstractController
{
    /**
     * @Route("/", name="promotion_index", methods={"GET"})
     * @param PromotionRepository $repository
     * @param Request $request
     * @return Response
     */
    public function index(PromotionRepository $repository,Request $request): Response
    {


        $data= new SearchData();
        $data->page=$request->get('page',1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $promotions = $this->getDoctrine()
            ->getRepository(Promotion::class);
        $promotions = $repository->findSearch($data);

        // dump($promotions);
        // die;

        /* $promotions = $this->getDoctrine()
             ->getRepository(Promotion::class)
             ->findAll();*/


        $datas = array();

        foreach ($promotions as $key => $promotion){
            $datas[$key]['idProm'] = $promotion->getIdProm();
            $datas[$key]['codeP'] = $promotion->getCodeP();
            $datas[$key]['reduction'] = $promotion->getReduction();
            $datas[$key]['dated'] = $promotion->getDated();
            $datas[$key]['datef'] = $promotion->getDatef();
            $datas[$key]['id'] = $promotion->getId();
            $datas[$key]['idP'] = $promotion->getIdP();

        }

        $rec= new JsonResponse($datas);
        //dd($rec->getContent());


        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotions,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/p", name="p",methods={"GET","POST"})
     */
    public function a(PromotionRepository $repository,Request $request): Response
    {
        $promotions = $this->getDoctrine()
            ->getRepository(Promotion::class)
            ->findAll();

        dd( $promotions);
        /* return $this->render('promotion/index.html.twig', [
             'promotions' => $promotions,
         ]);*/
    }









    /**
     * @Route("/Front", name="promotion_indexR", methods={"GET"})
     */
    public function indexR(): Response
    {
        $promotions = $this->getDoctrine()
            ->getRepository(Promotion::class)
            ->findAll();


        return $this->render('promotion/indexR.html.twig', [
            'promotions' => $promotions,
        ]);
    }








    /**
     * @Route("/new", name="promotion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($promotion);
            $entityManager->flush();
            $this->addFlash('success', 'promotion ajouté!');
            return $this->redirectToRoute('promotion_index');
        }


        return $this->render('promotion/new.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProm}", name="promotion_show", methods={"GET"})
     */
    public function show(Promotion $promotion): Response
    {
        return $this->render('promotion/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    /**
     * @Route("/{idProm}/edit", name="promotion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Promotion $promotion): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Promotion modifié!');
            return $this->redirectToRoute('promotion_index');
        }

        return $this->render('promotion/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProm}", name="promotion_delete", methods={"POST"})
     */
    public function delete(Request $request, Promotion $promotion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$promotion->getIdProm(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($promotion);
            $entityManager->flush();
            $this->addFlash('success', 'Promotion supprimé!');
        }

        return $this->redirectToRoute('promotion_index');
    }
    /**
     * @Route(" triRed", name="triRed")
     */
    public function TriRed(Request $request):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT p FROM App\Entity\Promotion p 
            ORDER BY p.reduction DESC'
        );

        $promotions = $query->getResult();


        return $this->render('promotion/index.html.twig',
            array('promotions' => $promotions));


    }









    /**
     * @param PartenaireRepository $repository
     * @param \Swift_Mailer $mailer
     * @param $partenaire
     * @param $promotion
     * @return Response
     * @Route ("randommail" , name="randommail" ,methods={"GET","POST"})
     */

    public function RandomUserMail(PartenaireRepository $repository, \Swift_Mailer $mailer,UtilisateurRepository $repositoryy,PromotionRepository $repo)
    {
        $Utilisateur = $repositoryy->createQueryBuilder('a')
            ->orderBy('RAND()')
            ->setMaxResults(1)
            ->getQuery()
            ->execute();
        $Promotion = $repo->createQueryBuilder('a')
            ->orderBy('RAND()')
            ->setMaxResults(1)
            ->getQuery()
            ->execute();

        foreach ($Utilisateur as $Utilisateur) {
            foreach ($Promotion as $Promotion)
            {$message = (new \Swift_Message('FEli!'))
                ->setFrom('nour.helali@esprit.tn')
                ->setTo($Utilisateur->getMail())

                ->setBody(
                    "Félicitations {$Utilisateur->getNom()} Vous avez gagner une réduction  {$Promotion->getReduction()} 
                 chez {$Promotion->getIdp()->getNomp()} 
                 votre code est {$Promotion->getCodep()}  ! ❤ " );

                $mailer->send($message);
            }
        }

        return $this->render('promotion/game.html.twig', [
            'promotion' => $Promotion,
            'utilisateur' => $Utilisateur,
        ]);

    }

    /**
     * @Route ("play" , name="play" ,methods={"GET","POST"})
     */
    public function playWithUser (PromotionRepository $repository):Response
    {
        $promotions = $repository->createQueryBuilder('a')
            ->orderBy('RAND()')
            ->setMaxResults(1)
            ->getQuery()
            ->execute();
        return $this->render('promotion/indexR.html.twig', [
            'promotions' => $promotions,
        ]);




    }





}