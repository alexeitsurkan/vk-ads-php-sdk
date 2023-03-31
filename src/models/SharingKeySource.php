<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class SharingKeySource extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $object_id;

    /**
     * @var string
     */
    public $object_type;
}