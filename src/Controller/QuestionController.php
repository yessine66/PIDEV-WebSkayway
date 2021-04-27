<?php

namespace App\Controller;

use App\Entity\Question;
use App\Form\QuestionType;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @Route("/question")
 */
class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question_index", methods={"GET"})
     */
    public function index(): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }
    /**
     * @Route("/index", name="questionF_index", methods={"GET"})
     */
    public function indexF(): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();


        $reponse = $this->getDoctrine()
            ->getRepository(Reponse::class)
            ->findAll();


        return $this->render('question/indexF.html.twig', [
            'questions' => $questions,'reponse' => $reponse,
        ]);
    }
    /**
     * @Route("/index1", name="questionF_show", methods={"GET"})
     */
    public function indexS(): Response
    {
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();

        return $this->render('question/showF.html.twig', [
            'questions' => $questions,
        ]);
    }

    /**
     * @Route("/new", name="question_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('question_index');

        }

        return $this->render('question/new.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idQ}", name="question_show", methods={"GET"})
     */
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    /**
     * @Route("/{idQ}/edit", name="question_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Question $question): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('question_index');
        }

        return $this->render('question/edit.html.twig', [
            'question' => $question,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idQ}", name="question_delete", methods={"POST"})
     */
    public function delete(Request $request, Question $question): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getIdQ(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('question_index');
    }
    /**
     * @Route("/question/tri", name="/question/tri")
     */
    public function Tri(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT q FROM App\Entity\Question q 
            ORDER BY q.nbrPoint ASC'
        );

        $question = $query->getResult();
        $this->addFlash('success', 'Tri affectué!');


        return $this->render('question/index.html.twig',
            array('questions' => $question));

    }

    /**
     * @Route("/TriCat/", name="question_cat", methods={"POST"})
     */
    public function FindByCategorie(EntityManagerInterface $em,Request $request): Response
    {
        $data=$request->get('myText');
        $queryBuilder = $em->getRepository(Question::class)->createQueryBuilder('q');
        $queryBuilder->andWhere('q.nameT = :cat');
        $queryBuilder->setParameter('cat', $data);
        $questions = $queryBuilder->getQuery()->getResult();


        $categories = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();

        return $this->render('question/showF.html.twig', [
            'questions' => $questions,'categories' => $categories,
        ]);
    }
    /**
     * @param QuestionRepository $repository
     * @return Response
     * @Route ("list" , name="triCategorieB")
     */

    function OrderByName(QuestionRepository $repository)
    {

        $questions=$repository->OrderByName();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);


    }


}
