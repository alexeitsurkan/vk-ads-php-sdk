<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class VkGroup extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $members_count;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shortname;
}