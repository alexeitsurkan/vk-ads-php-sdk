<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments\services\relations\models;

use app\vk_ads_api\src\components\Model;

class SegmentRelationAddItem extends Model
{
    /**
     * @var string
     */
    public $object_type;

    /**
     * @var object
     */
    public $params;
}