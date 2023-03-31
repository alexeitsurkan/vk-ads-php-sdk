<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class Subscription extends Model
{
    /**
     * @var string
     */
    public $callback_url;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $resource;
}