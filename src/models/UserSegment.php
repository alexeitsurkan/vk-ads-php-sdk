<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserSegment extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $object_id;

    /**
     * @var string
     */
    public $object_type;

    /**
     * @var object
     */
    public $params;
}