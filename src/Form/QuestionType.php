<?php

namespace App\Form;

use App\Entity\Question;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textQ')
            ->add('nbrPoint')
            ->add('nameT', ChoiceType::class, [
                'choices'  => [
                    'POO' => 'POO',
                    'MATHS' => 'MATHS',
                    'SVT' => 'SVT',
                    'PHYSIQUE' => 'PHYSIQUE',
                    'ART' => 'ART',
                ],
            ])
            ->add('captcha', CaptchaType::class);


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }

}
