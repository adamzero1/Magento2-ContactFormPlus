<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Zero1\ContactFormPlus\Model\Observer;

class ContactFormSubmission
{
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
		die('!');
        return;
    }
}
