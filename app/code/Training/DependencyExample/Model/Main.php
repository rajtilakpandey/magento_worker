<?php
namespace Training\DependencyExample\Model;

class Main 
// extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{       
    

    // const CACHE_TAG = 'training_dependencyexample_main';

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
    // protected $_eventPrefix = 'main';

    // /**
    //  * @param \Magento\Framework\Model\Context $context
    //  * @param \Magento\Framework\Registry $registry
    //  * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
    //  * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
    //  * @param array $data
    //  */

    protected array $data;
    protected Injectable $injectable;
    protected NonInjectableInterfaceFactory $nonInjectableFactory;
    protected AbstractUtil $util;
    protected HeavyOperation $heavyOperation;
    public function __construct(
    //     \Magento\Framework\Model\Context $context,
    //     \Magento\Framework\Registry $registry,
    //     \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
    //     \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        InjectableInterface $injectable,
        NonInjectableInterfaceFactory $nonInjectableFactory,
        HeavyOperation $heavyOperation,
        AbstractUtil $util,
        array $data = []
    ) {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->util = $util;
        $this->heavyOperation = $heavyOperation;
    //     parent::__construct($context, $registry, $resource, $resourceCollection, $data);

    }

    public function getId(): string{
        return $this->data["id"];
    }

    public function getInjectable() : Injectable {
        return $this->injectable;
    }

    public function getNonInjectable() {
        return $this->nonInjectableFactory->create();
    }

    public function getUtil() : AbstractUtil {
        return $this->util;
    }

    public function getHeavyOperation() : HeavyOperation {  
        return $this->heavyOperation;
    }

    // /**
    //  * Initialize resource model
    //  *
    //  * @return void
    //  */
    // protected function _construct()
    // {
    //     $this->_init('Training\DependencyExample\Model\ResourceModel\Main');
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
