<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet', ChoiceType::class, array(
                'choices' => [
                    'Cours' => 'Cours',
                    'Enseignant' => 'Enseignant',
                ],
            ))
            ->add('textR')
            ->add('dateEnvoi')
            ->add('cours')
            ->add('enseignant')
            ->add('id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }

}
