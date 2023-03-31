<?php

namespace app\vk_ads_api\src\services\goals\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\CounterGoal;
use app\vk_ads_api\src\models\Goal;

class Goals extends Model
{
    /**
     * @var Goal[]
     */
    public $mobile_install;

    /**
     * @var Goal[]
     */
    public $ok_game;

    /**
     * @var Goal[]
     */
    public $ok_group;

    /**
     * @var CounterGoal[]
     */
    public $topmailru;
}