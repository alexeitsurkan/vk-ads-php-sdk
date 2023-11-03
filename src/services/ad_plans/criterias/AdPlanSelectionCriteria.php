<?php

namespace VkAdsPhpSdk\services\ad_plans\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

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
     * @var string[]
     */
    public $fields;

    /**
     * @var string|string[]
     */
    public $sorting;

    public $_ad_group__banner__moderation_status;
    public $_ad_group__banner__status;
    public $_ad_group__banner__status__in;
    public $_ad_group__status;
    public $_ad_group__status__in;
    public $_banner_q;
    public $_campaign__banner__moderation_status;
    public $_campaign__banner__status;
    public $_campaign__banner__status__in;
    public $_campaign__status;
    public $_campaign__status__in;
    public $_campaign_q;
    public $_id;
    public $_id__in;
    public $_id__not_in;
    public $_inapp_event_category_id;
    public $_inapp_event_category_id__in;
    public $_lead_form_id;
    public $_lead_form_id__in;
    public $_objective;
    public $_objective__in;
    public $_or_status;
    public $_or_status__in;
    public $_priced_goal_name_exist;
    public $_priced_goal_source_id;
    public $_priced_goal_source_id__in;
    public $_q;
    public $_status;
    public $_status__in;
    public $_status__ne;
    public $_updated__gt;
    public $_updated__gte;
    public $_updated__lt;
    public $_updated__lte;
    public $_user_id;
    public $_user_id__in;
    public $_vkads_status;
    public $_vkads_status__in;
}