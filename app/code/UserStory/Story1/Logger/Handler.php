<?php
namespace UserStory\Story1\Logger;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class Handler extends Base
{
    protected $fileName = '/var/log/story1.log';
    protected $loggerType = Logger::INFO;
}
