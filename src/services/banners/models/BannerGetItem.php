<?php

namespace app\vk_ads_api\src\services\banners\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ModerationReason;

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