<?php

namespace App\Controller;

use App\Entity\Evenement;
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
use Spatie\CalendarLinks\Link;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use App\Entity\Apprenant;
use App\Entity\Enseignant;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Bundle\SnappyBundle\Snappy;
use Knp\Snappy\Pdf;

use Knp\Bundle\SnappyBundle\DependencyInjection;

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
     * @Route("{idTest}/indexcert", name="test_indexcert", methods={"GET","POST"})
     */
    public function indexf(Request $request,TestRepository $testRepository): Response
    {
        $test = $this->getDoctrine()
            ->getRepository(Test::class)
            ->findOneBy(['id'=>'177']);

        return $this->render('test/indexcert.html.twig', [
            'test' => $test,
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
        $userxo = $this->getUser();
       $Test->setId($userxo);
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
/**
 * @Route ("/pdf", name="test_pdf")
 */
public function indexpdf(Request $request, Pdf $snappy){
   //$snappy= $this->get("knp_snappy.pdf");
    $html = $this->renderView("test/pdf.html.twig", array(
        "title"=>"Fraj Yessine",
        "contenue" => "POO"

    ));
   $snappy->setOption("enable-local-file-access",true);
    $filename = "custom_pdf_from_twig";
    return new Response(
        $snappy->getOutputFromHtml($html),
        200,
        array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename ="'.$filename.'.pdf"'
        )
    );





}



}