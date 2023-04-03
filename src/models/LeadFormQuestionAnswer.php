<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormQuestionAnswer extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $text;
}