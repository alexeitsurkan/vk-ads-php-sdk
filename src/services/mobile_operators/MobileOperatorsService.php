<?php

namespace VkAdsPhpSdk\services\mobile_operators;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\mobile_operators\models\MobileOperator;

class MobileOperatorsService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_operators.json',MobileOperator::class);
    }
}