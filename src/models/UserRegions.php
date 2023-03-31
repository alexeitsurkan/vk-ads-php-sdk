<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class UserRegions extends Model
{
    /**
     * @var array
     */
    public $allowed;

    /**
     * @var array
     */
    public $required;

    /**
     * @var array
     */
    public $required_one_of;
}