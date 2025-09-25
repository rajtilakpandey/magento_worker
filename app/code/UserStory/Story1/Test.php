<?php
namespace UserStory\Story1;

use Magento\Catalog\Api\Data\CategoryInterface;
use UserStory\Story1\Api\CustomCategoryInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Psr\Log\LoggerInterface;
use InvalidArgumentException;

class Test
{
    private $category;
    private $array_random;
    private $string_random;
    private $jsonSerializer;
    private $logger;

    public function __construct(
        CategoryInterface $category,
        Json $jsonSerializer,
        LoggerInterface $logger,
        array $array_random = [],
        string $string_random = ''
    ) {
        if (!$category instanceof CustomCategoryInterface) {
            throw new InvalidArgumentException(
                'Injected category must implement CustomCategoryInterface'
            );
        }

        $this->category = $category;
        $this->jsonSerializer = $jsonSerializer;
        $this->logger = $logger;
        $this->array_random = $array_random;
        $this->string_random = $string_random;
    }

    public function displayParams()
    {
        $jsonArray = $this->jsonSerializer->serialize($this->array_random);

        // log to custom log
        $this->logger->info('Array (JSON): ' . $jsonArray);
        $this->logger->info('String: ' . $this->string_random);

        echo "<h2>Parameters Display by Rajtilak Pandey</h2>";
        echo "<pre><strong>Custom String:</strong> " . htmlspecialchars($this->string_random) . "</pre>";
        echo "<pre><strong>Custom Array (JSON):</strong> " . $jsonArray . "</pre>";
        echo "<pre><strong>Category Name:</strong> " . $this->category->getCategoryName() . "</pre>";
        echo "<p>Check <code>var/log/story1.log</code> for logs.</p>";
    }
}
