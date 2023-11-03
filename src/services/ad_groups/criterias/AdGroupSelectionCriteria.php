<?php

namespace VkAdsPhpSdk\services\ad_groups\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class AdGroupSelectionCriteria extends SelectionCriteria
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

    public $_ad_plan__status;
    public $_ad_plan__status__in;
    public $_ad_plan__status__ne;
    public $_ad_plan_id;
    public $_ad_plan_id__in;
    public $_ad_plan_id__ne;
    public $_ad_plan_id__not_in;
    public $_ad_plan_q;
    public $_ad_q;
    public $_banner__moderation_status;
    public $_banner__status;
    public $_banner__status__in;
    public $_dooh;
    public $_id;
    public $_id__in;
    public $_id__not_in;
    public $_inapp_event_category_id;
    public $_inapp_event_category_id__in;
    public $_issue;
    public $_objective;
    public $_objective__in;
    public $_or_status;
    public $_or_status__in;
    public $_package_id;
    public $_package_id__in;
    public $_package_id__ne;
    public $_package_id__not_in;
    public $_package_priced_event_type;
    public $_package_priced_event_type__in;
    public $_package_priced_event_type__ne;
    public $_package_priced_event_type__not_in;
    public $_priced_goal_source_id;
    public $_priced_goal_source_id__in;
    public $_q;
    public $_q__ne;
    public $_status;
    public $_status__in;
    public $_status__ne;
    public $_updated__gt;
    public $_updated__gte;
    public $_updated__lt;
    public $_updated__lte;
    public $_user_id;
    public $_user_id__in;
    public $_vk_ext_mapping_id;
    public $_vk_ext_mapping_id__in;
}