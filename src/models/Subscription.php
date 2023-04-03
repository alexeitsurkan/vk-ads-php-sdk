<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Subscription extends Model
{
    /**
     * @var string
     */
    public $callback_url;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $resource;
}