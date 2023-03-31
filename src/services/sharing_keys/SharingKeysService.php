<?php

namespace app\vk_ads_api\src\services\sharing_keys;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\sharing_keys\criterias\SharingKeySelectionCriteria;
use app\vk_ads_api\src\services\sharing_keys\models\SharingKey;
use app\vk_ads_api\src\services\sharing_keys\models\SharingKeyAddItem;
use app\vk_ads_api\src\services\sharing_keys\models\SharingKeyGetItem;
use app\vk_ads_api\src\services\sharing_keys\models\SharingKeyUser;

class SharingKeysService extends BaseService
{
    public function get(SharingKeySelectionCriteria $selectionCriteria):array
    {
        return $this->doGet('/api/v2/sharing_keys.json',SharingKeyGetItem::class,$selectionCriteria);
    }

    public function create(SharingKeyAddItem $model):array
    {
        $response = $this->doPost('/api/v2/sharing_keys.json',$model);
        return $this->mapArray($response, SharingKeyGetItem::class);
    }
    
    public function activate($key)
    {
        $response = $this->doPost("/api/v2/sharing_keys/$key.json",[]);
        return $this->mapArray($response, SharingKeyUser::class);
    }

    public function delete($key):bool
    {
        return $this->doDelete("/api/v2/sharing_keys/$key.json");
    }
}