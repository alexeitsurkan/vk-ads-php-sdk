<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class SharingKeyUser extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var UserSegment[]
     */
    public $sources;

    /**
     * @var string
     */
    public $username;
}