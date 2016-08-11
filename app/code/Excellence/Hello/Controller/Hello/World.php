<?php
namespace Excellence\Hello\Controller\Hello;
class world extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
    public function execute()
    {
        echo "hello woels";
    }
}