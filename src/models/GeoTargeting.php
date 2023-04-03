<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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