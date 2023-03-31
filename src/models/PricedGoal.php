<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class PricedGoal extends Model
{
    /**
     * @var string
     */
    public $name;
    
    /**
     * @var int
     */
    public $source_id;
}