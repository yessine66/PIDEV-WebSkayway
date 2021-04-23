<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

        //dd($data);


        /* $promotions = $this->getDoctrine()
             ->getRepository(Promotion::class)
             ->findAll();*/

        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotions,
            'form'=>$form->createView()
        ]);
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



}
