<?php

namespace VkAdsPhpSdk\services\statistics\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;
use VkAdsPhpSdk\services\statistics\enum\StatisticAttributionEnum;
use VkAdsPhpSdk\services\statistics\enum\StatisticMetricEnum;

class StatisticSelectionCriteria extends SelectionCriteria
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

    /**
     * @var string|StatisticMetricEnum[]
     */
    public $metrics = StatisticMetricEnum::BASE;

    /**
     * @var StatisticAttributionEnum
     * @Assert\NotBlank()
     */
    public $attribution = 'default';
}