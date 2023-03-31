<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class CounterGoal extends Model
{
    /**
     * @var int
     */
    public $counter_id;

    /**
     * @var string
     */
    public $counter_name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $goal;

    /**
     * @var int
     */
    public $id;
}