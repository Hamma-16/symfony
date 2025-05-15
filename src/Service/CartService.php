<?php
namespace App\Service;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class CartService
{
    public function __construct(
        private EntityManagerInterface $em,
        private Security $security
    ) {}

    public function getCart(): Cart
    {
        $user = $this->security->getUser();

        $cart = $this->em->getRepository(Cart::class)->findOneBy(['user' => $user]);

        if (!$cart) {
            $cart = new Cart();
            $cart->setUser($user);
            $this->em->persist($cart);
            $this->em->flush();
        }

        return $cart;
    }

public function addProduct(Product $product, int $quantity = 1): void
{
    $cart = $this->getCart();

    foreach ($cart->getItems() as $item) {
        if ($item->getProduct()->getId() === $product->getId()) {
            $newQuantity = $item->getQuantity() + $quantity;

            $item->setQuantity($newQuantity);
            $this->em->flush();
            return;
        }
    }

    if ($quantity > $product->getStock()) {
        throw new \Exception('Cannot add more than available stock.');
    }

    $item = new CartItem();
    $item->setCart($cart);
    $item->setProduct($product);
    $item->setQuantity($quantity);

    $this->em->persist($item);
    $this->em->flush();
}



    public function removeProduct(Product $product): void
    {
        $cart = $this->getCart();

        foreach ($cart->getItems() as $item) {
            if ($item->getProduct()->getId() === $product->getId()) {
                $cart->removeItem($item);
                $this->em->remove($item);
                $this->em->flush();
                return;
            }
        }
    }

    public function clearCart(): void
    {
        $cart = $this->getCart();
        foreach ($cart->getItems() as $item) {
            $this->em->remove($item);
        }
        $this->em->flush();
    }
}
