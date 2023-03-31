<?php

namespace app\vk_ads_api\src\services\mobile_operators;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_operators\models\MobileOperator;

class MobileOperatorsService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_operators.json',MobileOperator::class);
    }
}