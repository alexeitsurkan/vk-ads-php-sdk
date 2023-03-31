<?php

namespace app\vk_ads_api\src\services\inapp_event_categories;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\inapp_event_categories\models\InAppEventCategories;

class InappEventCategoriesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v1/inapp_event_categories.json',InAppEventCategories::class);
    }
}