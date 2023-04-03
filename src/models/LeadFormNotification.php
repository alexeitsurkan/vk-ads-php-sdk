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
     * @var object
     */
    public $conditions;

    /**
     * @var Destination[]
     */
    public $destinations;
}