<?php

namespace App\Form;

use App\Entity\Question;
use App\Entity\Reponse;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textR1')
            ->add('textR2')
            ->add('textR3')
            ->add('textR4')
            ->add('id',EntityType::class,['class'=>Utilisateur::class,'choice_label'=>'username'])
            ->add('idQ',EntityType::class,['class'=>Question::class,'choice_label'=>'textQ'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}
