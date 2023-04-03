<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class SkAdNetworkIdsCounts extends Model
{
    /**
     * @var int
     */
    public $available;

    /**
     * @var int
     */
    public $inherited_available;

    /**
     * @var int
     */
    public $inherited_total;

    /**
     * @var int
     */
    public $inherited_used;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $used;
}