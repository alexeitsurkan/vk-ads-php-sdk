<?php

namespace app\vk_ads_api\src\services\ad_plans\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class AdPlanSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int 
     */
    public $limit = 20;

    /**
     * @var int 
     */
    public $offset = 0;

    /**
     * @var int
     */
    public $_id;

    /**
     * @var int[]
     */
    public $_id__in;

    /**
     * @var string
     */
    public $_status;

    /**
     * @var string[]
     */
    public $_status__ne;

    /**
     * @var string[]
     */
    public $_status__in;

    /**
     * @var string|string[]
     */
    public $sorting;
}