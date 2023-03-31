<?php

namespace app\vk_ads_api\src\services\banner_patterns\models;

use app\vk_ads_api\src\components\Model;

class BannerPattern extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var object
     */
    public $format;

    /**
     * @var object
     */
    public $interface;

    /**
     * @var string
     */
    public $status;
}