<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class AgeTargeting extends Model
{
    /**
     * @var int[]
     */
    public $age_list;

    /**
     * @var bool
     */
    public $expand;
}