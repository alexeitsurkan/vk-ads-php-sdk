<?php

namespace VkAdsPhpSdk\services\agency;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\agency\criterias\AgencyClientSelectionCriteria;
use VkAdsPhpSdk\models\AgencyClientAddItem;
use VkAdsPhpSdk\models\AgencyClientGetItem;
use VkAdsPhpSdk\models\AgencyClientUpdateItem;

class AgencyService extends BaseService
{
    public function get(AgencyClientSelectionCriteria $selectionCriteria):array
    {
        return $this->doGet('/api/v2/agency/clients.json',AgencyClientGetItem::class, $selectionCriteria);
    }

    public function create(AgencyClientAddItem $model):array
    {
        return $this->doPost('/api/v2/agency/clients.json',$model);
    }

    public function update($id, AgencyClientUpdateItem $model):bool
    {
        $this->doPost("/api/v2/agency/clients/$id.json",$model);
        return true;
    }

    public function delete($id):bool
    {
        return $this->doDelete("/api/v2/agency/clients/$id.json");
    }
}