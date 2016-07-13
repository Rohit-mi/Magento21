<?php
namespace Training\Test\Controller\Action;
class Config extends \Magento\Framework\App\Action\Action
{
    public function execute(){
        $testConfig = $this->_objectManager->get('Training\Test\Model\Config\ConfigInterface');
        $myNodeInfo = $testConfig->getMyNodeInfo();
        if(is_array($myNodeInfo)) {
            foreach($myNodeInfo as $str) {
                $this->getResponse()->appendBody($str . "<BR>");
            }
        }
    }
}