<?php

namespace app\vk_ads_api\src\services\banner_fields;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\banner_fields\criterias\BannerFieldSelectionCriteria;
use app\vk_ads_api\src\services\banner_fields\models\BannerField;

class BannerFieldsService extends BaseService
{
    public function get(BannerFieldSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/banner_fields.json', BannerField::class,$selectionCriteria);
    }
}