<?php

namespace app\vk_ads_api\src\services\goals;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\goals\models\Goals;

class GoalsService extends BaseService
{
    public function get()
    {
        return $this->doGet('/api/v2/goals.json',Goals::class);
    }
}