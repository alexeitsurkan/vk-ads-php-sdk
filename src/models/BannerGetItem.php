<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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
     * @var BannerContent[]
     */
    public $content;

    /**
     * @var string
     */
    public $delivery;

    /**
     *  object[]
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
     * @var Textblock[]
     */
    public $textblocks;

    /**
     * @var Urls[]
     */
    public $urls;
}