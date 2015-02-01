<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Zero1\ContactFormPlus\Model\Observer;

/**
 * @method Resource\Visitor _getResource()
 * @method Resource\Visitor getResource()
 * @method Visitor setFirstVisitAt(string $value)
 * @method Visitor setLastVisitAt(string $value)
 * @method Visitor setVisitorId(int $value)
 * @method Visitor setIsNewVisitor(bool $value)
 * @method Visitor getIsNewVisitor()
 * @method Visitor getVisitorId()
 * @method int getLastUrlId()
 * @method Visitor setLastUrlId(int $value)
 * @method int getStoreId()
 * @method Visitor setStoreId(int $value)
 */
class ContactFormSubmission extends \Magento\Framework\Model\AbstractModel
{
    protected $dateTime;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\Resource\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\Db $resourceCollection
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\Resource\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\Db $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @param   \Magento\Framework\Event\Observer $observer
     * @return  null
     */
    public function success($observer)
    {
		/* @var $postObject \Magento\Framework\Object */
		$postObject = $observer->getPostObject();
		$handle = fopen(BP.'/var/log/adam.log', 'a');
		fwrite($handle, json_encode($postObject->getData()).PHP_EOL);
		fclose($handle);
        return;
    }
}
