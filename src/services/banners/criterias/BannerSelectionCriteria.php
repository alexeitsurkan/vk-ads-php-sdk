<?php

namespace VkAdsPhpSdk\services\banners\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class BannerSelectionCriteria extends SelectionCriteria
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

    public $_ad_group__ad_plan_id;
    public $_ad_group__ad_plan_id__in;
    public $_ad_group__ad_plan_id__ne;
    public $_ad_group__ad_plan_id__not_in;
    public $_ad_group_id;
    public $_ad_group_id__in;
    public $_ad_group_id__ne;
    public $_ad_group_id__not_in;
    public $_ad_group_status;
    public $_ad_group_status__in;
    public $_ad_group_status__ne;
    public $_ad_plan__status;
    public $_ad_plan__status__in;
    public $_ad_plan__status__ne;
    public $_ad_plan_q;
    public $_campaign__ad_plan_id;
    public $_campaign__ad_plan_id__in;
    public $_campaign__ad_plan_id__ne;
    public $_campaign__ad_plan_id__not_in;
    public $_campaign_id;
    public $_campaign_id__in;
    public $_campaign_id__ne;
    public $_campaign_id__not_in;
    public $_campaign_q;
    public $_campaign_status;
    public $_campaign_status__in;
    public $_campaign_status__ne;
    public $_id;
    public $_id__in;
    public $_id__not_in;
    public $_moderation_status;
    public $_objective;
    public $_objective__in;
    public $_or_status;
    public $_or_status__in;
    public $_package_id;
    public $_package_id__in;
    public $_package_id__ne;
    public $_package_id__not_in;
    public $_q;
    public $_q__ne;
    public $_q__seq;
    public $_status;
    public $_status__in;
    public $_status__ne;
    public $_textblock;
    public $_updated__gt;
    public $_updated__gte;
    public $_updated__lt;
    public $_updated__lte;
    public $_url;
    public $_user_id;
    public $_user_id__in;
}