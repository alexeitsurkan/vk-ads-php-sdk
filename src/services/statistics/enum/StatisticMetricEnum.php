<?php

namespace VkAdsPhpSdk\services\statistics\enum;

use VkAdsPhpSdk\components\Enum;

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