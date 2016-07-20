<?php
namespace Training\Test\Controller\Product;
class View extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        echo "ONE";
    }
    public function beforeExecute() {
        echo "BEFORE<BR>";
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result) {
        echo "AFTER";
    }
}