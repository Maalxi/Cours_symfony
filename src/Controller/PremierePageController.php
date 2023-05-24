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
        $page_title = 'Page accueil';
        return $this->render('premiere_page/index.html.twig', [
            'controller_name' => 'PremierePageController',
            'page_title' => $page_title
        ]);
    }

    #[Route('/prpr', name: 'app_prpr')]
    public function test(): Response
    {
        $page_title = 'PRPR';
        return $this->render('premiere_page/index.html.twig', [
            'controller_name' => 'PremierePageController',
            'page_title' => $page_title
        ]);
    }
}
