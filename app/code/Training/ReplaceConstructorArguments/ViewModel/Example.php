<?php
namespace Training\ReplaceConstructorArguments\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
Use Training\ReplaceConstructorArguments\Model\DefaultName;

class Example implements ArgumentInterface 
{
    protected DefaultName $defaultName;

    public function __construct(DefaultName $defaultName)
    {
        $this->defaultName = $defaultName;    
    }

    public function getName() : string {
        return $this->defaultName->getName();
    }
}
