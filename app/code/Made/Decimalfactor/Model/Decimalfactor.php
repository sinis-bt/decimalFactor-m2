<?php

namespace Made\Decimalfactor\Model;

/**
 * Class Decimalfactor
 *
 * @package Made\Decimalfactor\Model
 */
class Decimalfactor extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * Cache Tag
     *
     * @var string
     */
    protected $_cacheTag = 'made_decimalfactor_order';
    /**
     * Event Prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'made_decimalfactor_order';

    const CACHE_TAG = 'made_decimalfactor_order';

    /**
     * Constructor
     *
     * @codeCoverageIgnore
     * @codingStandardsIgnoreLine
     */
    protected function _construct()
    {
        $this->_init('Made\Decimalfactor\Model\ResourceModel\Decimalfactor');
    }

    /**
     * Get Identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get Default Values
     *
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}