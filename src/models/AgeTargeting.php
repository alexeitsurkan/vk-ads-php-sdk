<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class AgeTargeting extends Model
{
    /**
     * @var int[]
     */
    public $age_list;

    /**
     * @var bool
     */
    public $expand;
}