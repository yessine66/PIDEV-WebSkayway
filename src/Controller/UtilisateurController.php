<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Apprenant;
use App\Entity\Enseignant;
use App\Entity\Utilisateur;
use App\Form\ApprenantType;
use App\Form\EnseignantType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
//$userxo = $this->getUser()->getId();


    /**
     * @Route("/", name="utilisateur_index", methods={"GET"})
     */
    public function index(): Response
    {
    /*    $userxo = $this->getUser()->getId();

        $azz = $this->getUser()->getRole();
    //dd($azz);
       // dd($this->getUser());*/
        $utilisateurs = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->findAll();


     /*   $datas = array();
        foreach ($utilisateurs as $key => $utilisateur){
            $datas[$key]['id'] = $utilisateur->getId();
            $datas[$key]['nom'] = $utilisateur->getNom();
            $datas[$key]['prenom'] = $utilisateur->getPrenom();
            $datas[$key]['mail'] = $utilisateur->getMail();
            $datas[$key]['age'] = $utilisateur->getAge();
            $datas[$key]['tel'] = $utilisateur->getTel();
            $datas[$key]['genre'] = $utilisateur->getGenre();
            $datas[$key]['dateNaiss'] = $utilisateur->getDateNaiss();
            $datas[$key]['username'] = $utilisateur->getUsername();
            $datas[$key]['password'] = $utilisateur->getPassword();
            $datas[$key]['role'] = $utilisateur->getRole();
            $datas[$key]['creCompte'] = $utilisateur->getCreCompte();


        }*/
      //  $rec= new JsonResponse($datas);
       // dd($rec->getContent());


        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    /**
     * @Route("/new", name="utilisateur_new", methods={"GET","POST"})
     */
    public function new(Request $request,Request $request2,Request $requestens,UserPasswordEncoderInterface $encoder): Response
    {
        $todaya = new \DateTime();

        $apprenant = new Apprenant();
        $formapprenant = $this->createForm(ApprenantType::class, $apprenant);

        ///////////jdid
        $enseignant = new Enseignant();
        $formenseignant = $this->createForm(EnseignantType::class, $enseignant);



        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request2);
        $formapprenant->handleRequest($request);
        ////////jdid
        $formenseignant->handleRequest($request2);
        $checkrole = "";
        if ($form->isSubmitted() && $form->isValid() ) {
            $checkrole = $form->get('role')->getData();
            $password = $form->get('password')->getData();
            $description = $formapprenant->get('description')->getData();
            ////////jdid
            $matier = $formenseignant->get('matiere')->getData();
            $bibliographie = $formenseignant->get('bibliographie')->getData();
            $specialite = $formenseignant->get('specialite')->getData();

          // dd("description".$description);


            //dd($description);

            //dd($description);
          //  $utilisateur->setPassword($this->encoder->encodePassword($utilisateur,$password));
            $utilisateur->setPassword($encoder->encodePassword($utilisateur,$password));
            $utilisateur->setCreCompte($todaya);
            $rolex = $form->get('role')->getData();
           if($rolex=="admin"){
                $admin = new Admin();
                $admin->setId($utilisateur);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($admin);
                $entityManager->flush();

            }

            if($rolex=="apprenant"){



               // $formapprenant->submit(array_merge(['description' => $request2->request->get('description'), $request2->request->get('description')]), true);


                    //$apprenant->setDescription($description);


                    //$description = $request2->request->get('description');
                    $apprenant->setDescription($description);
                    $apprenant->setId($utilisateur);
                    $apprenant->setIdApp(9);


                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($apprenant);
                    $entityManager->flush();





            }
            if($rolex=="enseignant"){



                // $formapprenant->submit(array_merge(['description' => $request2->request->get('description'), $request2->request->get('description')]), true);


                //$apprenant->setDescription($description);


                //$description = $request2->request->get('description');
                $enseignant->setBibliographie($bibliographie);
                $enseignant->setMatiere($matier);
                $enseignant->setSpecialite($specialite);
                $enseignant->setId($utilisateur);
                $enseignant->setIdEns(6);

              //  dd($enseignant);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($enseignant);
                $entityManager->flush();





            }


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();

          //  return $this->redirectToRoute('utilisateur_index');
        }

        return $this->render('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
            'apprenant' => $apprenant,
            'formapprenant' => $formapprenant->createView(),
            'enseignant'=>$enseignant,
            'formenseignant'=>$formenseignant->createView(),

        ]);
    }




    /**
     * @Route("showFront", name="utilisateur_showFront", methods={"GET"})
     */
    public function showFront(Utilisateur $utilisateur): Response
    {
        //dd($this->getUser())
       // $utilisateur=$this->getUser();
        return $this->render('utilisateur/showFront.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }




    /**
     * @Route("/{id}", name="utilisateur_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
      //  dd($this->getUser()->getUsername());
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="utilisateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('utilisateur_index');
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="utilisateur_delete", methods={"POST"})
     */
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('utilisateur_index');
    }

    /**
     * @param UtilisateurRepository $repository
     * @return Response
     * @Route("triSQL",name="utilisateur_triRole")
     */
    function  orderByRoleSQL(UtilisateurRepository $repository){
        $utilisateurs=$repository->orderByRole();
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);

    }

    /**
     * @Route("liste",name="liste", methods={"GET"})
     */
    /*public function getUtilisateurs(UtilisateurRepository $repo, SerializerInterface $serializerInterfacex){
        $utilisateurs=$repo->findAll();
        $json=$serializerInterfacex->serialize($utilisateurs,'json',["groups"=>"utilisateurs"]);
        dd($json);

    }*/


    public function getUtilisateurs(UtilisateurRepository $repo, SerializerInterface $serializerInterfacex){
        $utilisateurs=$repo->findAll();
        $json=$serializerInterfacex->serialize($utilisateurs,'json',["groups"=>"utilisateurs"]);
        $result = new JsonResponse($utilisateurs);



        $datas = array();
        foreach ($utilisateurs as $key => $utilisateur){
            $datas[$key]['id'] = $utilisateur->getId();
            $datas[$key]['nom'] = $utilisateur->getNom();
            $datas[$key]['prenom'] = $utilisateur->getPrenom();
            $datas[$key]['mail'] = $utilisateur->getMail();
            $datas[$key]['age'] = $utilisateur->getAge();
            $datas[$key]['tel'] = $utilisateur->getTel();
            $datas[$key]['genre'] = $utilisateur->getGenre();
            $datas[$key]['dateNaiss'] = $utilisateur->getDateNaiss();
            $datas[$key]['username'] = $utilisateur->getUsername();
            $datas[$key]['password'] = $utilisateur->getPassword();
            $datas[$key]['role'] = $utilisateur->getRole();
            $datas[$key]['creCompte'] = $utilisateur->getCreCompte();


        }
        $rec= new JsonResponse($datas);
        dd($rec->getContent());

    }


    /**
     * @Route ("add",name="add_utilisateur")
     */
    public function addUtilisateur(Request $request,SerializerInterface $serializer , EntityManagerInterface $em){
        $content=$request->getContent();
        $data=$serializer->deserialize($content,Utilisateur::class,'json');
        $em->persist($data);
        $em->flush();
       // $x="hihi";
     //   dd($content);

        return new Response('utilisateur added seccesfully');

    }

    ///////////////////////////////////////////*************************JSON************************//////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





    ///////////////////////////////////////////*************************JSON************************//////////////////////////////////////////////////

    /******************Ajouter utilisateur*****************************************/
    /**
     * @Route("addUtilisateurJson", name="add_reclamation_json")
     * @Method("POST")
     */

    public function ajouterUtilisateurJson(Request $request)
    {


        $utilisateur = new Utilisateur();
        $nomxi = $request->query->get("nom");
        $prenomxi = $request->query->get("prenom");
        $mailxi = $request->query->get("mail");
        $agexi = $request->query->get("age");
        $telxi = $request->query->get("tel");
        $genrexi = $request->query->get("genre");
        $dateNaissxi = $request->query->get("dateNaiss");
        $usernamexi = $request->query->get("username");
        $passwordxi = $request->query->get("password");
        $rolexi = $request->query->get("role");
        $em = $this->getDoctrine()->getManager();
        $creComptexi = new \DateTime('now');


        $utilisateur->setNom($nomxi);
        $utilisateur->setPrenom($prenomxi);
        $utilisateur->setMail($mailxi);
        $utilisateur->setAge($agexi);
        $utilisateur->setTel($telxi);
        $utilisateur->setGenre($genrexi);
        $utilisateur->setDateNaiss($dateNaissxi);
        $utilisateur->setUsername($usernamexi);
        $utilisateur->setPassword($passwordxi);
        $utilisateur->setRole("apprenant");
        $utilisateur->setCreCompte($creComptexi);

        $em->persist($utilisateur);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($utilisateur);
        return new JsonResponse($formatted);

    }

    /******************Supprimer Utilisateur*****************************************/

    /**
     * @Route("deleteUtilisateurJson", name="delete_reclamation_json")
     * @Method("DELETE")
     */

    public function deleteUtilisateurJson(Request $request) {



        $idix = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository(Utilisateur::class)->find($idix);
        if($utilisateur!=null ) {
            $em->remove($utilisateur);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Utilisateur deleted seccesfully");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Utilisateur invalide.");

    }

    /******************Modifier Utilisateur*****************************************/
    /**
     * @Route("updateUtilisateurJson", name="update_reclamation_json")
     * @Method("PUT")
     */
    public function modifierUtilisateurJson(Request $request) {


        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->getDoctrine()->getManager()
            ->getRepository(Utilisateur::class)
            ->find($request->get("id"));

        $utilisateur->setNom($request->get("nom"));
        $utilisateur->setPrenom($request->get("prenom"));
        $utilisateur->setMail($request->get("mail"));
        $utilisateur->setAge($request->get("age"));
        $utilisateur->setTel($request->get("tel"));
        $utilisateur->setGenre($request->get("genre"));
        $utilisateur->setDateNaiss($request->get("dateNaiss"));
        $utilisateur->setUsername($request->get("username"));
        $utilisateur->setPassword($request->get("password"));



        $em->persist($utilisateur);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($utilisateur);
        return new JsonResponse("Utilisateur updated succesfully.");

    }



    /******************affichage Utilisateur*****************************************/

    /**
     * @Route("displayUtilisateurJson", name="display_utilisata_json")
     */
    public function allUtilisateurJson()
    {



        $utilisateur = $this->getDoctrine()->getManager()->getRepository(Utilisateur::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($utilisateur);

        //dd(new JsonResponse($formatted));
        return new JsonResponse($formatted);

    }


    /******************Detail Utilisateur*****************************************/

    /**
     * @Route("detailUtilisateurJson", name="detail_reclamation_json")
     * @Method("GET")
     */


    public function detailUtilisateurJson(Request $request)
    {


        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->getDoctrine()->getManager()->getRepository(Utilisateur::class)->find($id);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getDescription();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($utilisateur);

       // $x=new JsonResponse($formatted);
        return new JsonResponse($formatted);

    }







}

