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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{

    /**
     * @Route("/", name="utilisateur_index", methods={"GET"})
     */
    public function index(): Response
    {
        $azz = $this->getUser()->getRole();
    //dd($azz);
        $utilisateurs = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->findAll();

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
     * @Route("/{id}", name="utilisateur_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
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

}
