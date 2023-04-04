<?php

namespace VkAdsPhpSdk\services\remarketing\services\local_geo\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\LocalGeoPoint;
use Symfony\Component\Validator\Constraints as Assert;

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