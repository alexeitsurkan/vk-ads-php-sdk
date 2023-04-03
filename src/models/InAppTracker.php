<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class InAppTracker extends Model
{
    /**
     * @var InAppEvent[]
     */
    public $events;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
}