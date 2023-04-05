<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Region extends Model
{
    /**
     * @var string[]
     */
    public $flags;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $iso_alpha_3;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parent_id;

    /**
     * @var string
     */
    public $type;
}