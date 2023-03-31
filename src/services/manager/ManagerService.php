<?php

namespace app\vk_ads_api\src\services\manager;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\manager\criterias\ManagerClientSelectionCriteria;

class ManagerService extends BaseService
{
    public function get(ManagerClientSelectionCriteria $selectionCriteria):array
    {
        return $this->doGet('/api/v3/manager/clients.json', selectionCriteria:$selectionCriteria);
    }
}