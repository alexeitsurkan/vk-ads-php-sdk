<?php

namespace app\vk_ads_api\src\services\statistics\enum;

use app\vk_ads_api\src\components\Enum;

class StatisticMetricEnum extends Enum
{
    public const ALL      = 'all';
    public const BASE     = 'base';
    public const EVENTS   = 'events';
    public const VIDEO    = 'video';
    public const UNIQUES  = 'uniques';
    public const TPS      = 'tps';
    public const PLAYABLE = 'playable';
    public const ROMI     = 'romi';
}