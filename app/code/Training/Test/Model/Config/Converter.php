<?php
namespace Training\Test\Model\Config;
class Converter implements \Magento\Framework\Config\ConverterInterface {
    /**
     * Convert dom now tree to array
     * @param \DOMDocument $source
     * @param array
     * @throws \InvalidArguementException
     */
    public function convert($source)
    {
        $output = [];
        /** @var $optionNode /DOMNode */
        foreach ($source->getElementsByTagName('mynode') as $node) {
            $output[] = $node->textContent;
        }
        return $output;
    }
}