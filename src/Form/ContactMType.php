<?php

namespace App\Form;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Form\PartenaireType;
use App\Entity\Partenaire;


use App\Data\DataMail;


use Symfony\Component\Form\Extension\Core\Type\TextType;




class ContactMType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder


            ->add('from', EmailType::class)
            ->add('Partenaires',EntityType::class,['class'=>Partenaire::class,'choice_label'=>'mailP'])
            ->add('to', EmailType::class)

            ->add('message', TextareaType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            /*'data_class' => DataMail::class,*/
        ]);
    }
}
