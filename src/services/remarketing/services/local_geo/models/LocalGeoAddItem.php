<?php

namespace VkAdsPhpSdk\services\remarketing\services\local_geo\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\LocalGeoPoint;

class LocalGeoAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @var LocalGeoPoint[]
     * @Assert\NotBlank()
     */
    public $regions;
}