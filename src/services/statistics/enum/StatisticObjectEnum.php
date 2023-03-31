<?php

namespace app\vk_ads_api\src\services\statistics\enum;

use app\vk_ads_api\src\components\Enum;

class StatisticObjectEnum extends Enum
{
    public const DAY       = 'banners';
    public const AD_GROUPS = 'ad_groups';
    public const AD_PLANS  = 'ad_plans';
    public const USERS     = 'users';
}