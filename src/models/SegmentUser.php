<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class SegmentUser extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $username;
}