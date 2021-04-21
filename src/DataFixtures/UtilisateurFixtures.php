<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UtilisateurFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
       $this->encoder =$encoder;
    }
    public function load(ObjectManager $manager)
    {
       $user = new Utilisateur();
       $user->setUsername('yessine');
       $user->setPassword($this->encoder->encodePassword($user,'123'));
       $manager->persist($user);
        $manager->flush();
    }
}
