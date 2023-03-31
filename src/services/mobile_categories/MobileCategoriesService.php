<?php

namespace app\vk_ads_api\src\services\mobile_categories;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_categories\models\MobileCategory;

class MobileCategoriesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_categories.json',MobileCategory::class);
    }
}