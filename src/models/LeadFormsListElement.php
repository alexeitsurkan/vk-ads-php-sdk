<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;

class LeadFormsListElement extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var int
     */
    public $leads_count;

    /**
     * @var int
     */
    public $ad_plans_count;

    /**
     * @var int[]
     */
    public $ad_plan_ids;

    /**
     * @var int[]
     */
    public $ad_group_ids;

    /**
     * @var int[]
     */
    public $banner_ids;

    /**
     * @var int[]
     */
    public $active_ad_plan_ids;

    /**
     * @var string[]
     */
    public $notification_actions;

    /**
     * @var object
     */
    public $logo;
}