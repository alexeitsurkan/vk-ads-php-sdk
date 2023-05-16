<?php

namespace VkAdsPhpSdk\services\agency_managers;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\AgencyManager;
use VkAdsPhpSdk\services\agency_managers\criterias\AgencyManagerSelectionCriteria;

class AgencyManagersService extends BaseService
{
    public function get(AgencyManagerSelectionCriteria $selectionCriteria): array|AgencyManager
    {
        return $this->doGet('/api/v2/agency/managers.json', AgencyManager::class, $selectionCriteria);
    }

    public function create(array|AgencyManager $model): array
    {
        return $this->doPost('/api/v2/agency/managers.json', $model);
    }
}