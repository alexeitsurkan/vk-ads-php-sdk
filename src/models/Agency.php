<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Agency extends Model
{
    /**
     * @var float
     */
    public $buyer_commission;

    /**
     * @var bool
     */
    public $is_buyer;

    /**
     * @var float
     */
    public $overriding_commission;
}