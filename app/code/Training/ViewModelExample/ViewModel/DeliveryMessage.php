<?php
namespace Training\ViewModelExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Tests\NamingConvention\true\string;

class DeliveryMessage implements ArgumentInterface
{
    public function getMessage() : string {
        return "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur doloribus quod exercitationem officiis, iusto, amet perspiciatis dolorem nam iure aliquid, in ex? Odio, deserunt. Temporibus atque illum sit aperiam blanditiis.";
    }
}
