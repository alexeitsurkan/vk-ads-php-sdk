<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class BirthdayTargeting extends Model
{
    /**
     * @var int
     */
    public $days_after;

    /**
     * @var int
     */
    public $days_before;
}