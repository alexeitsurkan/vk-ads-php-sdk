<?php

namespace app\vk_ads_api\src\services\remarketing\services\local_geo\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\LocalGeoPoint;

class LocalGeoGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var LocalGeoPoint[]
     */
    public $regions;
}