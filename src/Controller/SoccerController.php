<?php

namespace App\Controller;

use App\Entity\Events;
use App\Form\EventsType;
use App\Repository\EventsRepository;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/soccer')]
class SoccerController extends AbstractController
{
    #[Route('/', name: 'app_events_soccer', methods: ['GET'])]
    public function index(EventsRepository $eventsRepository): Response
    {
        return $this->render('soccer/index.html.twig', [
            'events' => $eventsRepository->findAll(),
            // findBy(['event_type' => 'Soccer'])
        ]);
    }
    }
   

