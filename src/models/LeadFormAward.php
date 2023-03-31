<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormAward extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var Discount|Bonus
     */
    public $data;
}