<?php

namespace app\vk_ads_api\src\services\statistics\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;
use app\vk_ads_api\src\services\statistics\enum\StatisticAscDescEnum;
use app\vk_ads_api\src\services\statistics\enum\StatisticAttributionEnum;
use app\vk_ads_api\src\services\statistics\enum\StatisticMetricEnum;

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
     * @var int|string[]
     * @Assert\NotBlank()
     */
    public $id_ne;

    /**
     * @var string|StatisticMetricEnum[]
     */
    public $fields = StatisticMetricEnum::BASE;

    /**
     * @var StatisticAttributionEnum
     * @Assert\NotBlank()
     */
    public $attribution = 'default';

    /**
     * @var string[]
     */
    public $banner_status;

    /**
     * @var string[]
     */
    public $banner_status_ne;

    /**
     * @var string[]
     */
    public $group_status;

    /**
     * @var string[]
     */
    public $group_status_ne;

    /**
     * @var int[]
     */
    public $group_id;

    /**
     * @var int[]
     */
    public $group_id_ne;

    /**
     * @var int[]
     */
    public $package_id;
    
    /**
     * @var int[]
     */
    public $package_id_ne;

    /**
     * @var string
     */
    public $sort_by;

    /**
     * @var StatisticAscDescEnum
     */
    public $d;

    /**
     * @var int
     * @Assert\Range(
     *     min=1,
     *     max=250
     * )
     */
    public $limit = 20;

    /**
     * @var int 
     */
    public $offset = 0;
}