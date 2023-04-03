<?php

namespace VkAdsPhpSdk\services\remarketing\services\counters;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\counters\criterias\CounterSelectionCriteria;
use VkAdsPhpSdk\services\remarketing\services\counters\services\counter_goals\CounterGoalService;

class CountersService extends BaseService
{

    /**
     * @var CounterGoalService
     */
    private $counterGoalService;

    public function getCounterGoalService(): CounterGoalService
    {
        if (!$this->counterGoalService) {
            $this->counterGoalService = new CounterGoalService($this->token);
        }
        return $this->counterGoalService;
    }

    public function get(CounterSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/remarketing/counters.json', selectionCriteria: $selectionCriteria);
    }

    public function create(array $model): array
    {
        return $this->doPost('/api/v2/remarketing/counters.json', $model);
    }

    public function update($id, array $model): bool
    {
        $this->doPost("/api/v2/remarketing/counters/$id.json", $model);
        return true;
    }

    public function delete($id): bool
    {
        return $this->doDelete("/api/v2/remarketing/counters/$id.json");
    }
}