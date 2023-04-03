<?php

namespace VkAdsPhpSdk\services\mobile_categories\models;

use VkAdsPhpSdk\components\Model;

class MobileCategory extends Model
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
    public $platform;

    /**
     * @var string
     */
    public $type;
}