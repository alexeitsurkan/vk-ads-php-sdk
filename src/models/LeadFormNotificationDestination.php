<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormNotificationDestination extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * object
     */
    public $settings;
}