<?php
namespace Training\ProxyExample\Model\FeaturedProducts;

class FeaturedBySales implements FeaturedProductsInterface
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
            "Sales-1",
            "Sales-2",
            "Sales-3",
            "Sales-4",
            "Sales-5",
            "Sales-6"
        ];
    }
} 