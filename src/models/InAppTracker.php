<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class InAppTracker extends Model
{
    /**
     * @var InAppEvent[]
     */
    public $events;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
}