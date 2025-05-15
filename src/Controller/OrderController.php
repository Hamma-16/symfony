<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\OrderRepository;
use App\Service\OrderService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/order')]
##[IsGranted('ROLE_USER')]
class OrderController extends AbstractController
{
    #[Route('/checkout', name: 'app_order_checkout')]
    public function checkout(OrderService $orderService): Response
    {
        try {
            $order = $orderService->createOrder();
            $this->addFlash('success', 'Order placed successfully!');
            return $this->redirectToRoute('app_order_show', ['id' => $order->getId()]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Something went wrong: ' . $e->getMessage());
            return $this->redirectToRoute('app_cart');
        }
    }
    #[Route('/{id}/cancel', name: 'app_order_cancel', methods: ['POST'])]
public function cancel(Order $order, OrderService $orderService): Response
{
    try {
        $orderService->cancelOrder($order, $this->getUser());
        $this->addFlash('success', 'Order cancelled successfully.');
    } catch (\Exception $e) {
        $this->addFlash('error', $e->getMessage());
    }

    return $this->redirectToRoute('app_order_index');
}
    #[Route('/{id}', name: 'app_order_show', methods: ['GET'])]
    public function show(Order $order): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($order->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/', name: 'app_order_index', methods: ['GET'])]
    public function index(OrderRepository $orderRepository): Response
    {
        $orders = $orderRepository->findBy(['user' => $this->getUser()], ['createdAt' => 'DESC']);

        return $this->render('order/index.html.twig', [
            'orders' => $orders,
        ]);
    }
}
