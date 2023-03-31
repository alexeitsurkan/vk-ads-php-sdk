<?php

namespace app\vk_ads_api\src\services\banners\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ModerationReason;

class BannerRemoderateGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $remoderated;
}