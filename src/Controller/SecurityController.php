<?php
namespace App\Controller;

//require __DIR__ . '/vendor/autoload.php';

//require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;
use vendor\autoload;

use App\Entity\Admin;
use App\Entity\Apprenant;
use App\Entity\Enseignant;
use App\Entity\Utilisateur;
use App\Form\ApprenantType;
use App\Form\EnseignantType;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('security/login.html.twig', [
                'last_username' =>$lastUsername,
                'error' => $error,
            ]
        );


    }

    /**
     * @param Request $request
     * @param Request $request2
     * @param Request $requestens
     * @param UserPasswordEncoderInterface $encoder
     * @Route("/registration", name="account_new", methods={"GET","POST"})
     * @return Response
     */
    public function registration(Request $request,Request $request2,Request $requestens,UserPasswordEncoderInterface $encoder){
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

        return $this->render('security/registration.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
            'apprenant' => $apprenant,
            'formapprenant' => $formapprenant->createView(),
            'enseignant'=>$enseignant,
            'formenseignant'=>$formenseignant->createView(),

        ]);

    }



    /**
     * @param \Swift_Mailer $mailer
     * @Route("/forget", name="forget")
     * @return Response
     */
    public function forgetPassword( \Swift_Mailer $mailer){

   /*     $sid='AC8fa3666f9dd4ed903b184cb4b239346d';
        $token='ec37ef7cb1dfa607bbcfcfb78b18c4ae';
        $client = new Client($sid,$token);

        $client->messages->create(
            '+21652635795',
            array(
                'form' => '+14133442783',
                'body' => 'test test yessine'
            )
        );*/
      /*  $sid = "C8fa3666f9dd4ed903b184cb4b239346d"; // Your Account SID from www.twilio.com/console
        $token = "ec37ef7cb1dfa607bbcfcfb78b18c4ae"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);
        $message = $client->messages->create(
            "+216
            52635795", // Text this number
            [
                'from' => "+14133442783", // From a valid Twilio number
                'body' => "Hello from Twilio!"
            ]
        );
*/



        $message = (new \Swift_Message('FEli!'))
            ->setFrom('nour.helali@esprit.tn')
            ->setTo('yessine.fraj@esprit.tn')

            ->setBody(
                "Your Password is mimi" );

        $mailer->send($message);



        return $this->render('security/forgetSMS.html.twig');
    }


}