<?php

namespace VkAdsPhpSdk\services\lead_ads\services\lead_forms\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class LeadFormSelectionCriteria extends SelectionCriteria
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
    public $_ad_plan_ids;
    
    /**
     * @var int[]
     */
    public $_ad_group_ids;
    
    /**
     * @var int[]
     */
    public $_banner_ids;

    /**
     * @var string
     */
    public $q;

    /**
     * @var string|string[]
     */
    public $sorting;

    /**
     * @var int
     */
    public $get_active_form_ad_plans;
}