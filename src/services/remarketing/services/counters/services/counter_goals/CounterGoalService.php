<?php

namespace app\vk_ads_api\src\services\remarketing\services\counters\services\counter_goals;

use app\vk_ads_api\src\components\BaseService;

class CounterGoalService extends BaseService
{
    public function get($counter_id)
    {
        return $this->doGet("/api/v2/remarketing/counters/$counter_id/goals.json");
    }

    public function create($counter_id, array $model)
    {
        return $this->doPost("/api/v2/remarketing/counters/$counter_id/goals.json",$model);
    }

    public function update($counter_id, $goal_id, array $model):bool
    {
        $this->doPost("/api/v2/remarketing/counters/$counter_id/goals/$goal_id.json",$model);
        return true;
    }
}