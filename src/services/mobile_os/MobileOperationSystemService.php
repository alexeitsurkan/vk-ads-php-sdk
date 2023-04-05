<?php

namespace VkAdsPhpSdk\services\mobile_os;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\MobileOperationSystem;

class MobileOperationSystemService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_os.json',MobileOperationSystem::class);
    }
}