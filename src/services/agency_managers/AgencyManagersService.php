<?php

namespace VkAdsPhpSdk\services\agency_managers;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\agency_managers\criterias\AgencyManagerSelectionCriteria;

class AgencyManagersService extends BaseService
{
    public function get(AgencyManagerSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet('/api/v2/agency/managers.json', selectionCriteria: $selectionCriteria);
    }

    public function create(array $model): array
    {
        return $this->doPost('/api/v2/agency/managers.json', $model);
    }
}