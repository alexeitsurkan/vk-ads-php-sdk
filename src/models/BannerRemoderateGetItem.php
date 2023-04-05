<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ModerationReason;

class BannerRemoderateGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $remoderated;
}