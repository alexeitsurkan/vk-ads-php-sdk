<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class GeoTargeting extends Model
{
    /**
     * @var LocalGeoTargeting
     */
    public $local_geo;

    /**
     * @var int[]
     */
    public $regions;
}