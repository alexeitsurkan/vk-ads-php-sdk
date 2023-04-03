<?php

namespace VkAdsPhpSdk\services\manager;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\manager\criterias\ManagerClientSelectionCriteria;

class ManagerService extends BaseService
{
    public function get(ManagerClientSelectionCriteria $selectionCriteria):array
    {
        return $this->doGet('/api/v3/manager/clients.json', selectionCriteria:$selectionCriteria);
    }
}