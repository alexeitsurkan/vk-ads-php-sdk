<?php

namespace VkAdsPhpSdk\services\sharing_keys\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\UserSegment;

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