<?php

declare(strict_types= 1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface{
    protected $resultFactory;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }
    public function execute()  {
        $result = $this->resultFactory->create();
        $result->getConfig()->getTitle()->set("Rajtilak");
        return $result;
    }   
}