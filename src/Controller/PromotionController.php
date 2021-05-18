<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Partenaire;
use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Form\SearchForm;
use App\Repository\PartenaireRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PromotionRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;
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
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return Response
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

    /******************************************************/
    //JSONNN

    /**
     * @Route("/p", name="p",methods={"GET","POST"})
     * @param PromotionRepository $repository
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    public function a (PromotionRepository $repository,Request $request,SerializerInterface $serializer): Response
    {
        //$promotions = $repository
        //  ->findAll();
        $repository=$this->getDoctrine()->getRepository(Promotion::class);
        $promotions=$repository->findAll();
        //$json=$serializer->serialize($promotions,'json',['groups'=>'promotions']);
        $json=$serializer->serialize($promotions,'json',['groups'=>'promotion']);

        dd( $json);
        /* return $this->render('promotion/index.html.twig', [
             'promotions' => $promotions,
         ]);*/
        //return new Response(json_encode($json));
    }


    /**
     * @Route ("add", name="promotion_add", methods={"GET","POST"})
     * @Method("POST")
     */

    public function ajouterPromotionAction(Request $request,PartenaireRepository $partenaireRepository)
    {
        $promotion = new Promotion();
        $codeP = $request->query->get("codeP");
        $reduction = $request->query->get("reduction");
        $dated= $request->query->get("dated");
        $datef = $request->query->get("datef");
        $partenaire= $request->query->get("idP");
        // $idP = $request->query->get("idP");
        $em = $this->getDoctrine()->getManager();
        //$date = new \DateTime('now');
        /*
         $user = $userRepository->findOneBy(['id' => $student]);
                $cos->setIdStudent($user);*/
        $promotion->setCodeP($codeP);
        $promotion->setReduction($reduction);
        $promotion->setDated($dated);
        $promotion->setDatef($datef);
        //
        $idP= $partenaireRepository->findOneBy(['idP' => $partenaire]);
        $promotion->setIdP($idP);
        // $promotion->setEtat(0);

        $em->persist($promotion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);
        return new JsonResponse($formatted);

    }

    /**
     * @Route ("del", name="promotion_del", methods={"GET","POST"})
     * @Method("DELETE")
     */

    public function supprimerPromotionAction(Request $request)
    {
        $idProm = $request->get("idProm");

        $em = $this->getDoctrine()->getManager();
        $promotion= $em->getRepository( Promotion::class)->find($idProm);
        if($promotion!=null ) {
            $em->remove($promotion);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("promotiona ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id promotion invalide.");

    }
    /**
     * @Route ("up", name="promotion_up")
     * @Method("PUT")
     */

    public function modifierPromotionAction(Request $request,PartenaireRepository $partenaireRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $promotion= $this->getDoctrine()->getManager()
            ->getRepository(Promotion::class)
            ->find($request->get("idProm"));
        $partenaire= $request->query->get("idP");
        $promotion->setCodeP($request->get("codeP"));
        $promotion->setReduction($request->get("reduction"));
        $promotion->setDated($request->get("dated"));
        $promotion->setDatef($request->get("datef"));
        // $promotion->setIdP($request->get("idP"));
        $idP= $partenaireRepository->findOneBy(['idP' => $partenaire]);
        $promotion->setIdP($idP);
        $em->persist($promotion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);
        return new JsonResponse("PROMOTION a ete modifiee avec success.");
//OLFA
        //   $promotion=$this->getDoctrine()->getRepository(Classe::class)->find($idProm);
        /*$idProm = $request->get("idProm");

        $em = $this->getDoctrine()->getManager();
        $promotion= $em->getRepository( Promotion::class)->find($idProm);

        $en=$this->getDoctrine()->getManager();
        $promotion->setCodeP($request->get("codeP"));
        $promotion->setReduction($request->get("reduction"));
        $promotion->setDated($request->get("dated"));
        $promotion->setDatef($request->get("datef"));
        $en->flush();
        $encoder = array (new JsonEncoder());
        $normalizer = array(new ObjectNormalizer());
        $normalizer[0]->setIgnoredAttributes(array('partenaire','utilisateur'));
        // $normalizer->setIgnoredAttributes(['enseignants']);
        $normalizer[0]->setCircularReferenceLimit(1);
        $normalizer[0]->setCircularReferenceHandler(function ($object) {
            return $object->getIdProm();
        });

        $serializer = new Serializer($normalizer, $encoder);

        $formatted = $serializer->serialize($promotion, 'json');
        $formatted1 = $serializer->normalize($promotion);
        return new JsonResponse($formatted1);







*/





    }


    /**
     * @Route ("lis", name="promotion_lis")
     * @param PromotionRepository $repository
     * @param ParteanaireRepository $repo
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function allPromotionAction(PromotionRepository $repository,Request $request,SerializerInterface $serializer,PartenaireRepository $repo)
    {
        $promotion = $this->getDoctrine()->getManager()->getRepository(Promotion::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);

        return new JsonResponse($formatted);
        // return new JsonResponse($json);
    }
    /**
     * @Route("det", name="detail_promotion")
     * @Method("GET")
     */

    //Detail Reclamation
    public function detailPromotionAction(Request $request)
    {
        $idProm = $request->get("idProm");

        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()->getRepository(Promotion::class)->find($idProm);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($reclamation);
        $x=new JsonResponse($formatted);
        // dd($x->getContent());
        return new JsonResponse($formatted);
    }
    /**
     * @Route("detp", name="detail_promotion")
     * @Method("GET")
     */

    //Detail Reclamation
    public function detailPartAction(Request $request,PartenaireRepository $partenaireRepository)
    {
        $partenaire= $request->query->get("idP");



        $em = $this->getDoctrine()->getManager();
        $idP= $partenaireRepository->findOneBy(['idP' => $partenaire]);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($idP);
        $x=new JsonResponse($formatted);
        // dd($x->getContent());
        return new JsonResponse($formatted);
    }

    /**
     * @Route("idp", name="detail_promotion")
     * @Method("GET")
     */

    //Detail Reclamation
    public function idPartAction(Request $request,PartenaireRepository $partenaireRepository)
    {
        $partenaire= $request->query->get("idP");



        $em = $this->getDoctrine()->getManager();
        $idP= $partenaireRepository->findOneBy(['idP' => $partenaire]);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($idP);
        $x=new JsonResponse($formatted);
        // dd($x->getContent());
        return new JsonResponse($formatted);
    }


    /*
      public function addCos(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializerInterface, UserRepository $userRepository, CostudyingtypeRepository $costudyingtypeRepository)
        {
            $cos = new CoStudying();
            $description = $request->query->get("description");
            $typeid = $request->query->get("type");
            $rating = $request->query->get("rating");
            $niveau = $request->query->get("niveau");
            $student = $request->query->get("idStudent");
           // $file = $request->query->get("file");
            $file = "Business Model CanvasJSON.pdf";
            $em = $this->getDoctrine()->getManager();
            $date = new \DateTime('now');

            $cos->setDescription($description);
            $cos->setCreatedDate($date);
            $cos->setNiveau($niveau);
            $cos->setRating($rating);
            $cos->setFile($file);
            $type = $costudyingtypeRepository->findOneBy(['id' => $typeid]);
            $cos->setType($type);
            $user = $userRepository->findOneBy(['id' => $student]);
            $cos->setIdStudent($user);
            $em->persist($cos);
            $em->flush();

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("CoStudying content added successfully");
            return new JsonResponse($formatted);
        }*/

// corr aff
    /**
     * @Route ("displayi", name="display_cos")
     */
    public function getCos(PromotionRepository $promotionRepository, SerializerInterface $serializerInterface)
    {
        $cos = $this->getDoctrine()->getManager()->getRepository(Promotion::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($cos , 'json', [AbstractNormalizer::ATTRIBUTES => ['idProm','codeP','reduction','dated','datef','idP'=>['nomP']]]);
        // $formatted = $serializer->normalize($cos , 'json', [AbstractNormalizer::ATTRIBUTES => ['idProm']]);
        return new JsonResponse($formatted);
        /*
          $promotion = $this->getDoctrine()->getManager()->getRepository(Promotion::class)->findAll();
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($promotion);

                return new JsonResponse($formatted);*/
    }







}