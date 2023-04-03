<?php

namespace VkAdsPhpSdk\services\urls\models;

use VkAdsPhpSdk\components\Model;

class URLGetItem extends Model
{
    /**
     * @var string[]
     */
    public $counters;

    /**
     * @var bool
     */
    public $has_goals;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $preview_link;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string[]
     */
    public $url_types;
}