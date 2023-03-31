<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class Agency extends Model
{
    /**
     * @var float
     */
    public $buyer_commission;

    /**
     * @var bool
     */
    public $is_buyer;

    /**
     * @var float
     */
    public $overriding_commission;
}