<?php

namespace VkAdsPhpSdk\services\banner_fields\models;

use VkAdsPhpSdk\components\Model;

class BannerField extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $field;

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
    public $role;

    /**
     * @var string
     */
    public $status;
}