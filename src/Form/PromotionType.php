<?php

namespace App\Form;

use App\Entity\Partenaire;
use App\Entity\Promotion;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeP')
            ->add('reduction')
            ->add('dated')
            ->add('datef')
            ->add('id',EntityType::class,['class'=>Utilisateur::class,'choice_label'=>'id'])
            ->add('idP',EntityType::class,['class'=>Partenaire::class,'choice_label'=>'nomP'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
