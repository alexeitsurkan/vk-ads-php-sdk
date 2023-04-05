<?php

namespace VkAdsPhpSdk\services\mobile_types;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\MobileTypes;

class MobileTypesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_types.json',MobileTypes::class);
    }
}