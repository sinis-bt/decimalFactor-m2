<?php

namespace Made\Decimalfactor\Model\ResourceModel;

/**
 * Class Decimalfactor
 *
 * @package Made\Decimalfactor\Model\ResourceModel
 */
class Decimalfactor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Decimalfactor constructor.
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * Constructor
     *
     * @codeCoverageIgnore
     * @codingStandardsIgnoreLine
     */
    protected function _construct()
    {
        $this->_init('made_decimalfactor_order', 'entity_id');
    }
}