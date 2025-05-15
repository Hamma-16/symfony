<?php

namespace App\Entity;

use App\Repository\OrderItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemRepository::class)]
class OrderItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $order = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\Column(length: 255)]
    private string $productName;

    #[ORM\Column(type: 'float')]
    private float $unitPrice;

    #[ORM\Column]
    private int $quantity;

    public function getId(): ?int { return $this->id; }

    public function getOrder(): ?Order { return $this->order; }

    public function setOrder(?Order $order): self {
        $this->order = $order;
        return $this;
    }

    public function getProduct(): ?Product {
        return $this->product;
    }

    public function setProduct(?Product $product): self {
        $this->product = $product;
        return $this;
    }

    public function getProductName(): string { return $this->productName; }

    public function setProductName(string $productName): self {
        $this->productName = $productName;
        return $this;
    }

    public function getUnitPrice(): float { return $this->unitPrice; }

    public function setUnitPrice(float $unitPrice): self {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getQuantity(): int { return $this->quantity; }

    public function setQuantity(int $quantity): self {
        $this->quantity = $quantity;
        return $this;
    }

    public function getTotal(): float {
        return $this->unitPrice * $this->quantity;
    }
}
