<?php

namespace VkAdsPhpSdkmodels;


use VkAdsPhpSdk\components\Model;

class LeadFormGetItem extends Model
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
     * @var string
     */
    public $first_screen_type;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $long_description;

    /**
     * @var string
     */
    public $company_title;

    /**
     * @var string
     */
    public $logo_id;

    /**
     * @var object
     */
    public $logo;

    /**
     * @var Award
     */
    public $award;

    /**
     * @var int
     */
    public $gradient;

    /**
     * @var string[]
     */
    public $contact_fields;

    /**
     * @var ResultInfo
     */
    public $result_info;

    /**
     * @var Agreement
     */
    public $agreement;

    /**
     * @var Notification[]
     */
    public $notifications;

    /**
     * @var Page[]
     */
    public $pages;
}