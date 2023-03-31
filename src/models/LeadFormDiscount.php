<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormDiscount extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $value;
}