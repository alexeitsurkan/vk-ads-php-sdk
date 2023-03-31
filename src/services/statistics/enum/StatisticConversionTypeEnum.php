<?php

namespace app\vk_ads_api\src\services\statistics\enum;

use app\vk_ads_api\src\components\Enum;

class StatisticConversionTypeEnum extends Enum
{
    public const POSTVIEW  = 'postview';
    public const POSTCLICK = 'postclick';
    public const TOTAL     = 'total';
}