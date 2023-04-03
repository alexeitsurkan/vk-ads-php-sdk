<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class BirthdayTargeting extends Model
{
    /**
     * @var int
     */
    public $days_after;

    /**
     * @var int
     */
    public $days_before;
}