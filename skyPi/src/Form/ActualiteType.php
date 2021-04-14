<?php

namespace App\Form;

use App\Entity\Actualite;
use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreAc')
            ->add('description')
            ->add('image')
            ->add('idEv')
            /*->add('id')*/
            ->add('dateAjout',DateType::class, [
        'placeholder' => [
            'day' => 'Day', 'month' => 'Month','year' => 'Year',
        ]
    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
        ]);
    }
}
