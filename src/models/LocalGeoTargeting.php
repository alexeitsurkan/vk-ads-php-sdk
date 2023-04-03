<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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