<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/categories', name: 'categories_')]
class CategoriesController extends AbstractController
{
    #[Route('/{slug}', name: 'list')]
    public function list(Categories $category, ProductsRepository $productsRepository, Request $request): Response
    {
        //On va chercher la liste des produits de la catégorie
        // $products = $category->getProducts();

        // on va chercher le numéro de page dans l'url par la requête
        $page = $request->query->getInt('page', 1);

        // on va chercher dans le productrepository les produits
        $products = $productsRepository->findProductsPaginated($page, $category->getSlug(), 8);

        // return $this->render('categories/list.html.twig', compact('category', 'products'));
        // Syntaxe alternative
        return $this->render('categories/list.html.twig', [
           'category' => $category,
            'products' => $products
         ]);
    }
}