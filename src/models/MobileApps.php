<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class MobileApps extends Model
{
    /**
     * @var string
     */
    public $app_name;

    /**
     * @var int[]
     */
    public $campaign_ids;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $preview_url;

    /**
     * @var int
     */
    public $rb_mobile_app_id;

    /**
     * @var SkAdNetworkIdsCounts
     */
    public $sk_ad_network_ids;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $url_object_id;

    /**
     * object[]
     */
    public $users;
}