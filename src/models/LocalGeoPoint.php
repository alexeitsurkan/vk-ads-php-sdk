<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LocalGeoPoint extends Model
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