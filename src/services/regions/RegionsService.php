<?php

namespace app\vk_ads_api\src\services\regions;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\regions\criterias\RegionSelectionCriteria;
use app\vk_ads_api\src\services\regions\models\Region;

class RegionsService extends BaseService
{
    public function get(RegionSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet('/api/v2/regions.json', Region::class, $selectionCriteria);
    }
}