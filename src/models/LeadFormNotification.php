<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormNotification extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * object
     */
    public $conditions;

    /**
     * @var Destination[]
     */
    public $destinations;
}