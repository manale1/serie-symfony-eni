<?php

namespace App\Form;

use App\Entity\Serie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SerieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TelType::class, [
                'label' => 'Title'
            ])
            ->add('overview',TextareaType::class,['required' => false,])
            ->add('status',ChoiceType::class,[
                'choices'=>
                [
                    'Cancellad' => 'Cancellad',
                    'ended' => 'ended',
                    'returning' => 'returning'
                ],
                'multiple' => false,
            ])
            ->add('vote')
            ->add('popularity')
            ->add('genres')
            ->add('firstAirDate' , DateTimeType::class,[
                'html5' => 'true',
                'widget' => 'single_text'
            ])
            ->add('lastAirDate')
            ->add('backdrop')
            ->add('poster')
            ->add('tmdbId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Serie::class,
        ]);
    }
}
