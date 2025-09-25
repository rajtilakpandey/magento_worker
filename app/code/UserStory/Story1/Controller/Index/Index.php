<?php
namespace UserStory\Story1\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use UserStory\Story1\Test;

class Index implements HttpGetActionInterface
{
    protected $resultFactory;
    protected $test;

    public function __construct(ResultFactory $resultFactory, Test $test)
    {
        $this->resultFactory = $resultFactory;
        $this->test = $test;
    }

    public function execute()
    {
        $this->test->displayParams();

        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        return $resultRaw;
    }
}
