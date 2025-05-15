<?php
namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/cart')]
class CartController extends AbstractController
{
    #[Route('/', name: 'app_cart')]
    public function index(CartService $cartService): Response
    {
        $cart = $cartService->getCart();

        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
            'items' => $cart->getItems(),
        ]);
    }

 
    #[Route('/add/{id}', name: 'app_cart_add', methods: ['POST'])]
    public function add(Product $product, CartService $cartService, Request $request): Response
    {
        $quantity = max(1, (int) $request->request->get('quantity', 1)); // default to 1
        $cartService->addProduct($product, $quantity);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(Product $product, CartService $cartService): Response
    {
        $cartService->removeProduct($product);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/clear', name: 'app_cart_clear')]
    public function clear(CartService $cartService): Response
    {
        $cartService->clearCart();
        return $this->redirectToRoute('app_cart');
    }
}
