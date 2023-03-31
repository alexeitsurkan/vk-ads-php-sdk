<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LocalGeoPointTargeting extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $label;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lng;

    /**
     * @var int
     */
    public $radius;
}