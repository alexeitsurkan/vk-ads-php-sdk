<?php

namespace app\vk_ads_api\src\services\mobile_app_users\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\SkAdNetworkIdsCounts;

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
     * @var object[]
     */
    public $users;
}