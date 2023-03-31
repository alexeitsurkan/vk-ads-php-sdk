<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class ModerationReason extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;
}