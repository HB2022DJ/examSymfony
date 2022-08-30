<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailListingController extends AbstractController
{
    #[Route('/detail/listing', name: 'app_detail_listing')]
    public function index(
        ListingRepository $listingRepository
    ): Response {
        return $this->render('front/detail_listing/index.html.twig', [
            'details' => $listingRepository->findAll()
        ]);
    }
}
