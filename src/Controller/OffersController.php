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
        $page_title = 'Offi';
        $offers = [
            [
                'title' => 'Produit 1',
                'description' => 'Description du produit 1',
                'price' => rand(10, 100)
            ],
            [
                'title' => 'Produit 2',
                'description' => 'Description du produit 2',
                'price' => rand(10, 100)
            ],
            [
                'title' => 'Produit 3',
                'description' => 'Description du produit 3',
                'price' => rand(10, 100)
            ]
        ];

        return $this->render('offers/offers.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $page_title,
            'offers' => $offers,
        ]);
    }

    #[Route('/offers/offi2', name: 'app_offi2')]
    public function offi2(): Response
    {
        $page_title = 'Offi2';
        return $this->render('offers/offi2.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $page_title
        ]);
    }

    #[Route('/offers/offi3', name: 'app_offi3')]
    public function offi3(): Response
    {
        $page_title = 'Offi3';
        return $this->render('offers/offi3.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $page_title
        ]);
    }
}
