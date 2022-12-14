<?php

namespace App\Controller;

use App\Entity\Listing;
use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ListingRepository $listingRepository
    ): Response {
        return $this->render('front/home/index.html.twig', [
            'listings' => $listingRepository->findAll(),
        ]);
    }
}
