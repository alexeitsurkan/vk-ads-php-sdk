<?php

namespace app\vk_ads_api\src\services\mobile_vendors;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_vendors\models\MobileVendors;

class MobileVendorsService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_vendors.json',MobileVendors::class);
    }
}