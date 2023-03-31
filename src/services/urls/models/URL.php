<?php

namespace app\vk_ads_api\src\services\urls\models;

use app\vk_ads_api\src\components\Model;

class URL extends Model
{
    /**
     * @var string[]
     */
    public $counters;

    /**
     * @var bool
     */
    public $has_goals;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $preview_link;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string[]
     */
    public $url_types;
}