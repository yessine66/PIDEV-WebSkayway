<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Partenaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //q pour taper notre recherche ou on est pas oblig de faire rechrche grace a required false
        $builder
            ->add('q', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'chercher un code promo'
                ]
            ])
            ->add('partenaire', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Partenaire::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('min', NumberType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'reduction min'
                ]
            ])
            ->add('max', NumberType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'reduction max'
                ]
            ])
            ->add('promo', CheckboxType::class, [
                'label' => 'bon plan',
                'required' => false,
            ])
        ;
    }
    /*permet de configurer options lies au form

    data_ class responsable au generation du data
    passer recherché dans url
    desactiver protection



    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }
//simplitiser url
    public function getBlockPrefix()
    {
        return '';
    }

}