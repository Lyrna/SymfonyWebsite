<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PersonnageRepository;

/**
* @Route("/conference")
*/
class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="conference")
     */
    public function index(PersonnageRepository $PersonnageRepository): Response
    {
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'Clarisse',
            'personnage' => $PersonnageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/secondPage", name="secondPage")
     */

     public function secondPage(): Response
    {
        return $this->render('conference/secondPage.html.twig', [
            'controller_name' => 'Lyrna',
        ]);
    }
}