<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class BannerPattern extends Model
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
     * @var string
     */
    public $description;

    /**
     * @var object
     */
    public $format;

    /**
     * @var object
     */
    public $interface;

    /**
     * @var string
     */
    public $status;
}