<?php

namespace app\vk_ads_api\src\services\statistics\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;
use app\vk_ads_api\src\services\statistics\enum\StatisticAttributionEnum;
use app\vk_ads_api\src\services\statistics\enum\StatisticConversionTypeEnum;

class StatisticGoalSelectionCriteria extends SelectionCriteria
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
     * @var StatisticAttributionEnum
     * @Assert\NotBlank()
     */
    public $attribution;


    /**
     * @var StatisticConversionTypeEnum[]
     * @Assert\NotBlank()
     */
    public $conversion_type;
}