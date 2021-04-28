<?php

namespace App\Controller;

use App\Entity\Exam;
use App\Entity\LigneExam;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\Test;
use App\Entity\User;
use App\Entity\Utilisateur;
use App\Form\TestType;
use App\Repository\TestRepository;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 */
class TestController extends AbstractController
{
    /**
     * @Route("/", name="test_index", methods={"GET","POST"})
     */
    public function index(Request $request): Response
    {
        $tests = $this->getDoctrine()
            ->getRepository(Test::class)
            ->findAll();

        $questions = $this->getDoctrine()
           ->getRepository(Question::class)
           ->findAll();

        $reponses = $this->getDoctrine()
            ->getRepository(Reponse::class)
            ->findAll();


        return $this->render('test/index.html.twig', [
           'tests' => $tests,'questions' => $questions,'reponses' => $reponses,
        ]);
    }

    /**
     * @Route("/indexBack", name="test_indexBack", methods={"GET","POST"})
     */
    public function indexBack(Request $request): Response
    {
        $tests = $this->getDoctrine()
            ->getRepository(Test::class)
            ->findAll();



        return $this->render('test/indexBack.html.twig', [
            'tests' => $tests,
        ]);
    }
    /**
     * @Route("/{idTest}/indexf", name="testf_index", methods={"GET"})
     */
    public function indexf(Test $test): Response
    {
        $tests = $this->getDoctrine()
            ->getRepository(Test::class)
            ->findAll();

        return $this->render('test/index2.html.twig', [
            'tests' => $tests,
        ]);
    }
    /**
     * @Route("/new", name="test_newwwww", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tests = $this->getDoctrine()
            ->getRepository(Test::class)
            ->findAll();

        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();

        $reponses = $this->getDoctrine()
            ->getRepository(Reponse::class)
            ->findAll();
        $score = $request->get('score');
        $value = intval($score);

        $Test = new Test();
        $Test->setDateTest(new\DateTime());
        $Test->setScore($value);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Test);
        $entityManager->flush();

        return $this->render('test/index.html.twig', [
            'tests' => $tests,'questions' => $questions,'reponses' => $reponses,
        ]);
    }






    /**
     * @Route("/test/index", name="testfd_index", methods={"GET"})
     */
    public function showx(Test $test): Response
    {

        return $this->render('test/index.html.twig', [
            'test' => $test,
        ]);
    }

    /**
     * @Route("/{idTest}/edit", name="test_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Test $test): Response
    {
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_index');
        }

        return $this->render('test/edit.html.twig', [
            'test' => $test,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTest}", name="test_delete", methods={"POST"})
     */
    public function delete(Request $request, Test $test): Response
    {
        if ($this->isCsrfTokenValid('delete'.$test->getIdTest(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($test);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_index');
    }





}
