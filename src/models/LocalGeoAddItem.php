<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
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