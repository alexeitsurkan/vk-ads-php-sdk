<?php

namespace app\vk_ads_api\src\services\mobile_types;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_types\models\MobileTypes;

class MobileTypesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_types.json',MobileTypes::class);
    }
}