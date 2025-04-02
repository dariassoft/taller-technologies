<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private array $products = [
        ["id" => 1, "name" => "Laptop", "description" => "High-performance laptop", "price" => 1200],
        ["id" => 2, "name" => "Smartphone", "description" => "Latest model smartphone", "price" => 800],
        ["id" => 3, "name" => "Tablet", "description" => "Portable tablet", "price" => 500],
        ["id" => 4, "name" => "Laptop 2", "description" => "High-performance laptop", "price" => 2200],
        ["id" => 5, "name" => "Smartphone 2", "description" => "Latest model smartphone", "price" => 900],
        ["id" => 6, "name" => "Tablet 2", "description" => "Portable tablet", "price" => 600]
    ];

    #[Route('/products', methods: ['GET'])]
    public function getAllProducts(): JsonResponse
    {
        return $this->json($this->products);
    }

    #[Route('/products/{id}', methods: ['GET'])]
    public function getProduct(int $id): JsonResponse
    {
        foreach ($this->products as $product) {
            if ($product['id'] === $id) {
                return $this->json($product);
            }
        }
        return $this->json(['error' => 'Product not found'], 404);
    }
}