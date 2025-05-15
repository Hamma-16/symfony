<?php

namespace App\Service;

use App\Entity\Order;
use App\Entity\OrderItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class OrderService
{
    public function __construct(
        private EntityManagerInterface $em,
        private Security $security,
        private CartService $cartService
    ) {}
    public function createOrder(): Order
    {
        $user = $this->security->getUser();
        $cart = $this->cartService->getCart();
        $order = new Order();
        $order->setUser($user);
        $order->setCreatedAt(new \DateTimeImmutable());
        $order->setStatus('pending');

        $total = 0;

        foreach ($cart->getItems() as $cartItem) {
            $product = $cartItem->getProduct();
            $quantity = $cartItem->getQuantity();

            if ($product->getStock() < $quantity) {
                throw new \Exception("Not enough stock for product: {$product->getName()}");
            }

            $orderItem = new OrderItem();
            $orderItem->setProduct($product);
            $orderItem->setQuantity($quantity);
            $orderItem->setUnitPrice($product->getPrice());
            $order->addItem($orderItem);
            $orderItem->setProductName($product->getName());
            $product->setStock($product->getStock() - $quantity);

            $total += $orderItem->getUnitPrice() * $orderItem->getQuantity();
        }

        $order->setTotal($total);
        $this->em->persist($order);
        $this->em->flush();

        $this->cartService->clearCart();

        return $order;
    }
    public function cancelOrder(Order $order, $user): void
{
    if ($order->getUser() !== $user && !$this->security->isGranted('ROLE_ADMIN')) {
        throw new \Exception('You are not authorized to cancel this order.');
    }

    $order->setStatus('cancelled');
    $this->em->remove($order);
    $this->em->flush();
    foreach ($order->getItems() as $item) {
        $product = $item->getProduct();
        $product->setStock($product->getStock() + $item->getQuantity());
    }

    $order->setStatus('cancelled');
    $this->em->flush();
}

}
