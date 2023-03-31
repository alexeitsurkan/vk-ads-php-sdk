<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class BannerContent extends Model
{
    /**
     * @var int
     */
    public $id;
    
    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $variants;
}