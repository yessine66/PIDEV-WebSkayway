<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Stars;
use App\Form\StarsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarsController extends AbstractController
{
    /**
     * @Route("/stars", name="stars")
     */
    public function index(): Response
    {
        return $this->render('stars/index.html.twig', [
            'controller_name' => 'StarsController',
        ]);
    }

    /**
     * @Route("/affichestars", name="list_stars")
     */
    public function afficherstars()
    {
        $stars = $this->getDoctrine()->getRepository(Stars::class)->findAll();
        return $this->render('stars/frontshowstars.html.twig', [
            "stars" => $stars,
        ]);
    }

    /**
     * @Route("/cours/index/{idC}", name="add_stars", methods={"GET","POST"})
     */
    public function addstars(Request $request, $idC): Response
    {
        $cours = $this->getDoctrine()->getRepository(Cours::class)->find($idC);

        if($request->isMethod("post")) {
            $value =(int)$request->get('note');
            if ($cours->getNote() == 0) {
                $cours->setNote($value);
            }
            else {
                $value = (int)floor(($value + $cours->getNote()) / 2);
                $cours->setNote($value);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('list_stars');
        }
        // return $this->render('stars/ajoutstars.html.twig', [
        //         "idevent" => $idevent,
        //     ]);

        // added by developer
      //  $comments = $this->comments($idevent);
        return $this->render('cours/showF.html.twig', [
            "idC" => $idC
           // "comments" => $comments
        ]);
    }
}
