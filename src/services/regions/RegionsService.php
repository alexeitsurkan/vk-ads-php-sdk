<?php

namespace VkAdsPhpSdk\services\regions;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\regions\criterias\RegionSelectionCriteria;
use VkAdsPhpSdkmodels\Region;

class RegionsService extends BaseService
{
    public function get(RegionSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet('/api/v2/regions.json', Region::class, $selectionCriteria);
    }
}