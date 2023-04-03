<?php

namespace VkAdsPhpSdk\services\user_geo;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\UserGeo;
use VkAdsPhpSdk\services\user_geo\criterias\UserGeoSelectionCriteria;

class UserGeoService extends BaseService
{
    public function get(UserGeoSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet('/api/v2/user_geo.json', UserGeo::class, $selectionCriteria);
    }
}