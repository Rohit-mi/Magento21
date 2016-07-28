<?php
/**
 * Product controller.
 * Copyright 2015 Magento. All rights reserved.
 * See COPYING.txt for licence details
 */
namespace Training\Test\Controller\Action;
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     *Test action index
     */
    public function execute() {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
    /**
     * Check if admin has permission to visit related pages
     * @return bool
    */
    protected function _isAllowed(){
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }
}