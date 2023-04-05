<?php

namespace VkAdsPhpSdk\services\sharing_keys;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\sharing_keys\criterias\SharingKeySelectionCriteria;
use VkAdsPhpSdk\models\SharingKey;
use VkAdsPhpSdk\models\SharingKeyAddItem;
use VkAdsPhpSdk\models\SharingKeyGetItem;
use VkAdsPhpSdk\models\SharingKeyUser;

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