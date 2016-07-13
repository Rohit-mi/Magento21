<?php
namespace Training\Test\Model\Config;
class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{
    protected $_schema = null;
    protected $_perFileSchema = null;
    /**
     * @param \Magento\Framework\Module\Dir\Reader $moduleReader
     */
    public function __construct(\Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $etcDir = $moduleReader->getModuleDir('etc', 'Training_Test');
        $this->_schema = $etcDir . '/test.xsd';
        $this->_perFileSchema = $etcDir . '/test.xsd';
    }
    /**
     * Get path to merged config schema
     *
     * @return string|null
     */
    public function getSchema(){
        return $this->_schema;
    }
    /**
     * Get path to pre file validation schema
     *
     * @return string|null
     */
    public function getPerFileSchema()
    {
        return $this->_perFileSchema;
    }
}