<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class ContentVariant extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $width;
}