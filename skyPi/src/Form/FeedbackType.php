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
            ->add('objet', ChoiceType::class, [
                'choices'  => [
                    'SkyWay' => 'SkyWay',
                    'Cours' => 'Cours',
                    'Enseignant' => 'Enseignant',
                    'Test' => 'Test',
                    'Partenaire' => 'Partenaire'
                ],

            ])
            ->add('text')
            ->add('avis',ChoiceType::class, [
                'choices'  => [
                    'Positive' => 'Positive',
                    'Negative' => 'Negative'

                ],
                'expanded'=>true
            ])
            ->add('idUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Feedback::class,
        ]);
    }
}
