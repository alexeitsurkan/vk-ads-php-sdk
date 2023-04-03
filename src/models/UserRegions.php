<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserRegions extends Model
{
    /**
     * @var array
     */
    public $allowed;

    /**
     * @var array
     */
    public $required;

    /**
     * @var array
     */
    public $required_one_of;
}