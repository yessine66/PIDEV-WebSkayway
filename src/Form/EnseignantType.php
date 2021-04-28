<?php

namespace App\Form;

use App\Entity\Enseignant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matiere',TextType::class, [
                'required' => false,
            ])
            ->add('bibliographie',TextareaType::class, [
                'required' => false,
            ])
            ->add('specialite',TextType::class, [
                'required' => false,
            ])
         //   ->add('id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Enseignant::class,
            'csrf_protection' => false,
            "allow_extra_fields" => true,
        ]);
    }
}
