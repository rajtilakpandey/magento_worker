<?php
namespace UserStory\Story1\Model;

use Magento\Catalog\Model\Category;
use UserStory\Story1\Api\CustomCategoryInterface;

class CustomCategory extends Category implements CustomCategoryInterface
{
    public function getCategoryName(): string
    {
        return $this->getName(); // fetch category name
    }
}
