<?php

namespace VkAdsPhpSdk\services\mobile_categories;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\MobileCategory;

class MobileCategoriesService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_categories.json',MobileCategory::class);
    }
}