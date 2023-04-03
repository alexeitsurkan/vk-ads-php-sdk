<?php

namespace VkAdsPhpSdk\services\banners\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ModerationReason;

class BannerGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $ad_group_id;

    /**
     * @var object
     */
    public $content;

    /**
     * @var string
     */
    public $delivery;

    /**
     * @var object[]
     */
    public $issues;

    /**
     * @var ModerationReason[]
     */
    public $moderation_reasons;

    /**
     * @var string
     */
    public $moderation_status;

    /**
     * @var object
     */
    public $textblocks;

    /**
     * @var object
     */
    public $urls;
}