<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffersController extends AbstractController
{
    #[Route('/offers', name: 'app_offers')]
    public function index(): Response
    {
        return $this->render('offers/index.html.twig', [
            'controller_name' => 'OffersController',
        ]);
    }
}
