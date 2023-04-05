<?php

namespace VkAdsPhpSdk\services\goals;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdkmodels\Goals;

class GoalsService extends BaseService
{
    public function get()
    {
        return $this->doGet('/api/v2/goals.json',Goals::class);
    }
}