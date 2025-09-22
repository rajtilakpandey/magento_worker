<?php
namespace Training\ProxyExample\Model\FeaturedProducts;

class FeaturedByCategory implements FeaturedProductsInterface
{
    protected array $featuredProducts = [];

    public function __construct() {
        $this->loadFeaturedProducts();
    }

    public function getFeaturedProducts(): array {
        return $this->featuredProducts;
    }

    public function count(): int {
        return count($this->featuredProducts);
    }

    protected function loadFeaturedProducts(): void {
        $this->featuredProducts = [
            "Product-1",
            "Product-2",
            "Product-3",
            "Product-4",
            "Product-5",
            "Product-6"
        ];
    }
}