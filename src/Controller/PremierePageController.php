<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremierePageController extends AbstractController
{
    #[Route('/', name: 'app_premiere_page')]
    public function index(): Response
    {
        return $this->render('premiere_page/index.html.twig', [
            'controller_name' => 'PremierePageController',
        ]);
    }

    #[Route('/prpr', name: 'app_prpr')]
    public function test(): Response
    {
        return $this->render('premiere_page/index.html.twig', [
            'controller_name' => 'PremierePageController',
        ]);
    }
}
