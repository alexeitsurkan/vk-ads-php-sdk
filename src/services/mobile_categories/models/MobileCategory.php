<?php

namespace app\vk_ads_api\src\services\mobile_categories\models;

use app\vk_ads_api\src\components\Model;

class MobileCategory extends Model
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
    public $platform;

    /**
     * @var string
     */
    public $type;
}