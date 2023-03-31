<?php

namespace app\vk_ads_api\src\services\urls\models;

use app\vk_ads_api\src\components\Model;

class URLAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $url;
}