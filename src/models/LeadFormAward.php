<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormAward extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var Discount|Bonus
     */
    public $data;
}