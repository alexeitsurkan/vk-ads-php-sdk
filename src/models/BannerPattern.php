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
     * object
     */
    public $format;

    /**
     * object
     */
    public $interface;

    /**
     * @var string
     */
    public $status;
}