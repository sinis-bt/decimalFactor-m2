<?php

namespace Made\Decimalfactor\Observer;

/**
 * Class SaveDecimalfactor
 *
 * @package Made\Decimalfactor\Observer
 */
class SaveDecimalfactor implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * Decimalfactor Factory
     *
     * @var \Made\Decimalfactor\Model\DecimalfactorFactory
     */
    protected $_decimalfactorFactory;
    /**
     * Decimalfactor Data
     *
     * @var \Made\Decimalfactor\Helper\Data
     */
    protected $_helperData;

    /**
     * @param \Made\Decimalfactor\Model\DecimalfactorFactory $decimalfactorFactory
     * @param \Made\Decimalfactor\Helper\Data $helperData
     */
    public function __construct(
                        \Made\Decimalfactor\Model\DecimalfactorFactory $decimalfactorFactory,
                        \Made\Decimalfactor\Helper\Data $helperData
    )
    {
        $this->_decimalfactorFactory = $decimalfactorFactory;
        $this->_helperData = $helperData;
    }

    /**
     * Save data to the decimalfactor table
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Magento\Framework\Event\ObserverInterface
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $invoice = $observer->getInvoice();
        $order = $invoice->getOrder();

        if($this->_helperData->getGeneralConfig('enable') && $this->_helperData->getGeneralConfig('decimal_factor') && $order->getBaseTotalDue() == 0){
            $val = $invoice->getBaseGrandTotal() * $this->_helperData->getGeneralConfig('decimal_factor');
            $decimalfactor = $this->_decimalfactorFactory->create();
            $decimalfactor->setOrderId($order->getId())
                ->setDecimalFactorSum($val)
                ->save();
        }
        return $this;
    }
}