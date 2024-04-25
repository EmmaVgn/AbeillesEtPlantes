<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {

        return $this->render('home/index.html.twig', [
            'categories' => $categoriesRepository->findBy([], ['categoryOrder' => 'ASC']),
        ]);
    }
}
