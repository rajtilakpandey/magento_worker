<?php
namespace Mageplaza\Customize\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory; // add this

class Index extends Action
{
    /**
     * Index action
     *
     * @return Raw
     */
    public function execute(): Raw
    {
        /** @var Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World');

        return $result;
    }
}
