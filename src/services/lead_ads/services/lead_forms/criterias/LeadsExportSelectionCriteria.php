<?php

namespace VkAdsPhpSdk\services\lead_ads\services\lead_forms\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class LeadsExportSelectionCriteria extends SelectionCriteria
{
    /**
     * @var string
     */
    public $_created_at__lte;

    /**
     * @var string
     */
    public $_created_at__gte;

    /**
     * @var int[]
     */
    public $_ad_plan_id__in;

    /**
     * @var int[]
     */
    public $_ad_group_id__in;

    /**
     * @var int[]
     */
    public $_banner_id__in;
}