<?php

namespace VkAdsPhpSdk\services\statistics\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;
use VkAdsPhpSdk\services\statistics\enum\StatisticAttributionEnum;
use VkAdsPhpSdk\services\statistics\enum\StatisticConversionTypeEnum;

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