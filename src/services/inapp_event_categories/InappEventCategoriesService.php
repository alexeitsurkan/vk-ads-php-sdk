<?php

namespace VkAdsPhpSdk\services\inapp_event_categories;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdkmodels\InAppEventCategories;

class InappEventCategoriesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v1/inapp_event_categories.json',InAppEventCategories::class);
    }
}