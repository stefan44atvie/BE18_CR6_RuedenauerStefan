<?php

namespace App\Controller;

use App\Entity\Events;
use App\Form\EventsType;
use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class EventsController extends AbstractController
{
    #[Route('/', name: 'app_events_index', methods: ['GET'])]
    public function index(EventsRepository $eventsRepository): Response
    {
        return $this->render('events/index.html.twig', [
            'events' => $eventsRepository->findAll(),
            // findBy(['event_type' => 'Soccer'])
        ]);
    }

    #[Route('/new', name: 'app_events_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EventsRepository $eventsRepository): Response
    {
        $event = new Events();
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventsRepository->save($event, true);

            return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('events/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_events_show', methods: ['GET'])]
    public function show(Events $event): Response
    {
        return $this->render('events/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_events_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Events $event, EventsRepository $eventsRepository): Response
    {
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventsRepository->save($event, true);

            return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('events/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_events_delete', methods: ['POST'])]
    public function delete(Request $request, Events $event, EventsRepository $eventsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $eventsRepository->remove($event, true);
        }
        

        return $this->redirectToRoute('app_events_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/wk', name: 'app_events_Weinverk', methods: ['GET'])]
    public function findWein(EventsRepository $eventsRepository): Response
    {
        return $this->render('events/wk.html.twig', [
            'events' => $eventsRepository->findBy(['event_type' => 'Soccer']),
            // findBy(['event_type' => 'Soccer'])
        ]);
    }
    
    #[Route('/mynew', name: 'app_speisekarte')]
    public function nonew(): Response
    {
        return $this->render('events/mynew.html.twig', [
            // 'controller_name' => 'SpeisekarteController',
        ]);
    }

}
