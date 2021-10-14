<?php

namespace App\Controller;

use App\Entity\TimeManager;
use App\Form\TimeManangerType;
use App\Repository\TimeManagerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimeManagerController extends AbstractController
{
    #[Route('/managetime', name: 'managetime')]
    public function index(Request $request, EntityManagerInterface $entityManager, TimeManagerRepository $repo): Response
    {
        $timeManager = new TimeManager();

        $form = $this->createForm(TimeManangerType::class, $timeManager);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $timeManager = $form->getData();
            $deliveryDate = $timeManager->getDeliveryAt();

            $afterMonth = $deliveryDate->modify('+30 days');
            $day = $afterMonth->format('d');
            $month = $afterMonth->format('m');
            $year = $afterMonth->format('Y');

            if ((int)$day < 10) {
                $timeManager->setPaymentAt(new \DateTime($year.''.$month.'10'));
            } else {
                $afterTwoMonths = $afterMonth->modify('+1 month');
                $year = $afterTwoMonths->format('Y');
                $month = $afterTwoMonths->format('m');

                $timeManager->setPaymentAt(new \DateTime($year.''.$month.'10'));
            }

            $entityManager->persist($timeManager);
            $entityManager->flush();

            return $this->redirectToRoute('managetime');
        }

        $dates = $repo->findAll();

        return $this->render('time_manager/index.html.twig', [
            'formTime' => $form->createView(),
            'dates' => $dates
        ]);
    }

    #[Route('', name: 'app_home')]
    public function home(): Response
    {

        return $this->render('time_manager/home.html.twig', [
            'title' => 'Home page',
        ]);
    }
}
