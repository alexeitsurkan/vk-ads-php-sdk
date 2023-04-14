<?php

namespace VkAdsPhpSdk\models;

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
    public $role;

    /**
     * @var string
     */
    public $status;
}