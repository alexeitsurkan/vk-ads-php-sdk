<?php

namespace app\vk_ads_api\src\services\agency;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\agency\criterias\AgencyClientSelectionCriteria;
use app\vk_ads_api\src\services\agency\models\AgencyClientAddItem;
use app\vk_ads_api\src\services\agency\models\AgencyClientGetItem;
use app\vk_ads_api\src\services\agency\models\AgencyClientUpdateItem;

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