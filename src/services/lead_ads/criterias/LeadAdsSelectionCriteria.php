<?php

namespace app\vk_ads_api\src\services\lead_ads\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class LeadAdsSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int 
     */
    public $limit = 50;

    /**
     * @var int 
     */
    public $offset = 0;

    /**
     * @var int[]
     */
    public $_form_ids__in;

    /**
     * @var int[]
     */
    public $_ad_plan_ids__in;

    /**
     * @var int[]
     */
    public $_ad_group_ids__in;

    /**
     * @var int[]
     */
    public $_banner_ids__in;

    /**
     * @var string
     */
    public $_created_at__lte;

    /**
     * @var string
     */
    public $_created_at__gte;

    /**
     * @var string|string[]
     */
    public $sorting;
}