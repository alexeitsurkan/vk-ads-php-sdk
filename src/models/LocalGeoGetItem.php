<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\LocalGeoPoint;

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