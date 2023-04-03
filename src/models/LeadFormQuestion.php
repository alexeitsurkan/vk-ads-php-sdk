<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormQuestion extends Model
{
    /**
     * @var bool
     */
    public $is_required;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var Answer[]
     */
    public $answers;
}