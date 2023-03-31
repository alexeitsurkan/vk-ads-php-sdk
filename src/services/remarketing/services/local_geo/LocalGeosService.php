<?php

namespace app\vk_ads_api\src\services\remarketing\services\local_geo;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\local_geo\models\LocalGeoAddItem;
use app\vk_ads_api\src\services\remarketing\services\local_geo\models\LocalGeoGetItem;

class LocalGeosService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/remarketing/local_geo.json?fields=id,name,regions',LocalGeoGetItem::class);
    }

    public function create(LocalGeoAddItem $model):array
    {
        return $this->doPost('/api/v2/remarketing/local_geo.json',$model);
    }

    public function update($id,LocalGeoAddItem $model):bool
    {
        $this->doPost("/api/v2/remarketing/local_geo/$id.json",$model);
        return true;
    }

    public function delete($id):bool
    {
        return $this->doDelete("/api/v2/remarketing/local_geo/$id.json");
    }
}