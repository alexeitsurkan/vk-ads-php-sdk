<?php

namespace VkAdsPhpSdk\services\mobile_vendors;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\mobile_vendors\models\MobileVendors;

class MobileVendorsService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_vendors.json',MobileVendors::class);
    }
}