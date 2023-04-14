<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoccerController extends AbstractController
{
    #[Route('/soccer', name: 'app_soccer')]
    public function index(): Response
    {

        return $this->render('soccer/index.html.twig', [
           
            $repository = $this->$this->getDoctrine()->getRepository(Event::class),
            $events = $repository->findBy(['event_type' => 'Konzert']),
            
            'controller_name' => 'SoccerController',
        ]);
    }
   
}
