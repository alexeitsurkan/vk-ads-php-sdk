<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class SharingKeySource extends Model
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
}