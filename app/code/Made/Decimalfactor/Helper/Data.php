<?php

namespace Made\Decimalfactor\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 *
 * @package Made\Decimalfactor\Helper
 */
class Data extends AbstractHelper
{

    const XML_PATH_HELLOWORLD = 'decimalfactor/';

    /**
     * Return config values
     *
     * @param string $field
     * @param int $storeId
     *
     * @return string
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * Return general config values
     *
     * @param string $code
     * @param int $storeId
     *
     * @return string
     */
    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
    }
}