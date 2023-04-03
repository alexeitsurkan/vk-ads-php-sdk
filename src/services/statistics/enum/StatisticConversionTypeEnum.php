<?php

namespace VkAdsPhpSdk\services\statistics\enum;

use VkAdsPhpSdk\components\Enum;

class StatisticConversionTypeEnum extends Enum
{
    public const POSTVIEW  = 'postview';
    public const POSTCLICK = 'postclick';
    public const TOTAL     = 'total';
}