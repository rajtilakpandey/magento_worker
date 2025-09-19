<?php
namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Training\DependencyExample\Model\Main;

class Example extends Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */

    protected Main $main;
    public function __construct(
        Context $context,
        Main $main, 
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->main = $main;    
    }

    public function getMain() {
        return $this->main;
    }
}
