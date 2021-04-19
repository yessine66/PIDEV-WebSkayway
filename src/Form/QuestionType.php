<?php

namespace App\Form;

use App\Entity\Question;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;
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


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }

}
