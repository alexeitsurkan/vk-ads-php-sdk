<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class IconImage extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $preview_url;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $width;
}