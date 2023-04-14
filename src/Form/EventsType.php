<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('event_name', NULL, ["attr" => ["placeholder" => "Please ener the name of the upcoming event", "class" => "eventname form-control w-50"]])
            ->add('event_datetime', NULL, ["attr" => [ "class" => "eventname form-control w-25"]])
            ->add('event_description', NULL, ["attr" => ["placeholder" => "Please enter a description for that event", "class" => "description form-control w-50"]])
            ->add('event_image', NULL, ["attr" => ["placeholder" => "Please enter a image address (HTTP) for that event", "class" => "image form-control w-50"]])
            ->add('event_capacity')
            ->add('event_type', ChoiceType::class, ['choices'  => [
                'Konzert' => "Konzert",
                'Soccer' => "Soccer",
                'Party' => "Party",
                'Live' => "Live",
                'music' => "music",
                'sport' => "sport",
                'movie' => "movie",
                'theatre' => "theatre",
                'walk' => "walk",
                'Weinverkostung' => "Weinverkostung",


            ], "attr"=>["class"=>"form-control, w-60"]]
            )
            ->add('event_email', NULL, ["attr" => ["placeholder" => "Please enter an email", "class" => "email form-control w-50"]])
            ->add('event_phone', NULL, ["attr" => ["placeholder" => "Please enter phone number", "class" => "phone form-control w-50"]])
            ->add('event_address', NULL, ["attr" => ["placeholder" => "Please enter an address", "class" => "address form-control w-50"]])
            ->add('event_url', NULL, ["attr" => ["placeholder" => "Please enter URL", "class" => "event_url form-control w-50"]])
            // ->add('event_type', NULL, ["attr" => ["placeholder" => "Please enter event-type", "class" => "event_type form-control w-50"]])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
