<?php

namespace VkAdsPhpSdk\services\banner_fields;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\banner_fields\criterias\BannerFieldSelectionCriteria;
use VkAdsPhpSdk\models\BannerField;

class BannerFieldsService extends BaseService
{
    public function get(BannerFieldSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/banner_fields.json', BannerField::class,$selectionCriteria);
    }
}