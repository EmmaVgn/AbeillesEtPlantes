<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/mon-panier', name: 'app_cart_index')]
    public function index(CartService $cartService): Response
    {
        
        
        return $this->render('cart/index.html.twig', [
            'cart' => $cartService->getTotal()
        
        ]);
    }

    #[Route('/mon-panier/add/{id}<\d+>', name: 'app_cart_add')]
    public function addToRoute(CartService $cartService, int $id): Response
    {
        $cartService->addToCart($id);

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/mon-panier/remove', name: 'app_cart_remove')]
    public function remove(CartService $cartService): Response
    {
        $cartService->removeCart();

        return $this->redirectToRoute('products_index');
    }
}
