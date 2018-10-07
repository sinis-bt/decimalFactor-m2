<?php

namespace Made\Decimalfactor\Model\ResourceModel\Decimalfactor;

/**
 * Class Collection
 *
 * @package Made\Decimalfactor\Model\ResourceModel\Decimalfactor
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Field Name Id
     *
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Event Prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'made_decimalfactor_order_collection';
    /**
     * Event Object
     *
     * @var string
     */
    protected $_eventObject = 'decimalfactor_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Made\Decimalfactor\Model\Decimalfactor', 'Made\Decimalfactor\Model\ResourceModel\Decimalfactor');
    }
}