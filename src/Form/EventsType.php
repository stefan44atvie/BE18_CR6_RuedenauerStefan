<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('event_name')
            ->add('event_datetime')
            ->add('event_description')
            ->add('event_image')
            ->add('event_capacity')
            ->add('event_email')
            ->add('event_phone')
            ->add('event_address')
            ->add('event_url')
            ->add('event_type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
