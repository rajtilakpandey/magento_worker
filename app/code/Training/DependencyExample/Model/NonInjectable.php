<?php
namespace Training\DependencyExample\Model;

class NonInjectable implements NonInjectableInterface
//  extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    public function getId(): string {
        return "Class Non Injectable";
    }
    // const CACHE_TAG = 'training_dependencyexample_non_injectable';

    // /**
    //  * Model cache tag for clear cache in after save and after delete
    //  *
    //  * @var string
    //  */
    // protected $_cacheTag = self::CACHE_TAG;

    // /**
    //  * Prefix of model events names
    //  *
    //  * @var string
    //  */
    // protected $_eventPrefix = 'non_injectable';

    // /**
    //  * @param \Magento\Framework\Model\Context $context
    //  * @param \Magento\Framework\Registry $registry
    //  * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
    //  * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
    //  * @param array $data
    //  */
    // public function __construct(
    //     \Magento\Framework\Model\Context $context,
    //     \Magento\Framework\Registry $registry,
    //     \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
    //     \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
    //     array $data = []
    // ) {
    //     parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    // }

    // /**
    //  * Initialize resource model
    //  *
    //  * @return void
    //  */
    // protected function _construct()
    // {
    //     $this->_init('Training\DependencyExample\Model\ResourceModel\NonInjectable');
    // }

    // /**
    //  * Return a unique id for the model.
    //  *
    //  * @return array
    //  */
    // public function getIdentities()
    // {
    //     return [self::CACHE_TAG . '_' . $this->getId()];
    // }
}
