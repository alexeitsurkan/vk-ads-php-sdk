<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LocalGeoTargeting extends Model
{
    /**
     * @var string[]
     */
    public $loc_type;

    /**
     * @var LocalGeoPointTargeting[]
     */
    public $locations;

    /**
     * @var string
     */
    public $visit_type;
}