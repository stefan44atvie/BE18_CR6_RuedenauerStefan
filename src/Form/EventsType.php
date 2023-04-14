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
            ->add('event_name', NULL, ["attr" => ["placeholder" => "Please enter the name of the upcoming event", "class" => "eventname form-control w-50"]])
            ->add('event_datetime')
            ->add('event_description', NULL, ["attr" => ["placeholder" => "Please enter a description for that event", "class" => "description form-control w-50"]])
            ->add('event_image')
            ->add('event_capacity')
            ->add('event_email', NULL, ["attr" => ["placeholder" => "Please enter an email", "class" => "email form-control w-50"]])
            ->add('event_phone', NULL, ["attr" => ["placeholder" => "Please enter phone number", "class" => "phone form-control w-50"]])
            ->add('event_address', NULL, ["attr" => ["placeholder" => "Please enter an address", "class" => "address form-control w-50"]])
            ->add('event_url', NULL, ["attr" => ["placeholder" => "Please enter URL", "class" => "event_url form-control w-50"]])
            ->add('event_type', NULL, ["attr" => ["placeholder" => "Please enter event-type", "class" => "event_type form-control w-50"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
