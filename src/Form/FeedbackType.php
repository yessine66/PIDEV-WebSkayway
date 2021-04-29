<?php

namespace App\Form;

use App\Entity\Feedback;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet',ChoiceType::class, array(
        'choices' => [
            'SkyWay' => 'SkyWay',
            'Cours' => 'Cours',
            'Enseignant' => 'Enseignant',
            'Cetificat' => 'Cetificat',
        ],
    ))
            ->add('text')
            ->add('avis' , ChoiceType::class, array(
              'choices' => [
                'Positive' => 'Positive',
                'Negative' => 'Negative',
        ],
            ))
            ->add('id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feedback::class,
        ]);
    }
}
