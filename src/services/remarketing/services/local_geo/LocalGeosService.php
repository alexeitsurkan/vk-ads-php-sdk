<?php

namespace VkAdsPhpSdk\services\remarketing\services\local_geo;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\local_geo\models\LocalGeoAddItem;
use VkAdsPhpSdk\services\remarketing\services\local_geo\models\LocalGeoGetItem;

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