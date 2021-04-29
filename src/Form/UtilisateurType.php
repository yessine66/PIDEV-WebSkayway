<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('age')
            ->add('tel')
            ->add('genre', ChoiceType::class, [
                'choices'  => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('dateNaiss',DateType::class, [
        'widget'=>'single_text',
    ])
            ->add('username')
            ->add('password',PasswordType::class
            )
            ->add('role', ChoiceType::class, [
                'choices'  => [
                    'Admin' => 'admin',
                    'Apprenant' => 'apprenant',
                    'Enseignant' => 'enseignant',
                ],
            ])
           //->add('saveAndAdd', SubmitType::class)
            //->add('creCompte')
           ->add('captcha', CaptchaType::class, array(
               'width' => 200,
               'height' => 50,
               'length' => 6,
           ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
