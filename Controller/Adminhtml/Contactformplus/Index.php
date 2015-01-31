<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Zero1\ContactFormPlus\Controller\Adminhtml\Contactformplus;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @return bool
     */
    protected function _isAllowed()
    {
		die('h');
        return $this->_authorization->isAllowed('Magento_Log::online');
    }

    /**
     * @return void
     */
    public function execute()
    {
		die('here');
        if ($this->getRequest()->getParam('ajax')) {
            $this->_forward('grid');
            return;
        }

        $this->_view->loadLayout();

        $this->_setActiveMenu('Magento_Customer::customer_online');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Customers Now Online'));

        $this->_addBreadcrumb(__('Customers'), __('Customers'));
        $this->_addBreadcrumb(__('Online Customers'), __('Online Customers'));

        $this->_view->renderLayout();
    }
}
