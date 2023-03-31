<?php

namespace app\vk_ads_api\src\services\statistics\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;
use app\vk_ads_api\src\services\statistics\enum\StatisticAttributionEnum;
use app\vk_ads_api\src\services\statistics\enum\StatisticConversionTypeEnum;

class StatisticOfflineConversionsSelectionCriteria extends SelectionCriteria
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $date_from;
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $date_to;

    /**
     * @var int|string[]
     * @Assert\NotBlank()
     */
    public $id;
}