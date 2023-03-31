<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormNotification extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var object
     */
    public $conditions;

    /**
     * @var Destination[]
     */
    public $destinations;
}