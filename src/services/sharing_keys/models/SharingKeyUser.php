<?php

namespace app\vk_ads_api\src\services\sharing_keys\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\UserSegment;

class SharingKeyUser extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var UserSegment[]
     */
    public $sources;

    /**
     * @var string
     */
    public $username;
}