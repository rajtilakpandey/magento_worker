<?php
namespace UserStory\Story1;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    private $category;
    private $array_random;
    private $string_random;

    /**
     * Constructor for Test.
     *
     * @param CategoryInterface $category The Magento object/interface.
     * @param array $customArray Injected from di.xml.
     * @param string $customString Injected from di.xml.
     */
    public function __construct(
        CategoryInterface $category,
        array $array_random = [],
        string $string_random = ''
    ) {
        $this->category = $category;
        $this->array_random = $array_random;
        $this->string_random = $string_random;
    }

    public function displayParams() 
    {
        echo "<h2>Injected Parameters Display by Rajtilak Pandey</h2>";
        echo "<pre><strong>Custom String:</strong> " . htmlspecialchars($this->string_random) . "</pre>";
        echo "<pre><strong>Custom Array:</strong><br/>";
        print_r($this->array_random);
        echo "</pre>";
        echo "<pre><strong>Category Interface implementation:</strong><br/>" . get_class($this->category) . "</pre>";
    }
}