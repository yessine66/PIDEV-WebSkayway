<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('dateNaiss')
            ->add('username')
            ->add('password',PasswordType::class,[
                'always_empty' => true,
            ])
            ->add('role', ChoiceType::class, [
                'choices'  => [
                    'Admin' => 'admin',
                    'Apprenant' => 'apprenant',
                    'Enseignant' => 'enseignant',
                ],
            ])
            ->add('creCompte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
