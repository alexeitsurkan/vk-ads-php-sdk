<?php

namespace app\vk_ads_api\src\services\apple_apps\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ModerationReason;

class SkAdNetworkIdsAddItem extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $username;
}