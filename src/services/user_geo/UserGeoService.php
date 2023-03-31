<?php

namespace app\vk_ads_api\src\services\user_geo;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\models\UserGeo;
use app\vk_ads_api\src\services\user_geo\criterias\UserGeoSelectionCriteria;

class UserGeoService extends BaseService
{
    public function get(UserGeoSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet('/api/v2/user_geo.json', UserGeo::class, $selectionCriteria);
    }
}