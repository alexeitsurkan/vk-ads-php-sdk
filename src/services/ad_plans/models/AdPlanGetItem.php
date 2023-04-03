<?php

namespace VkAdsPhpSdk\services\ad_plans\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\PricedGoal;
use VkAdsPhpSdk\services\ad_groups\models\AdGroup;

class AdPlanGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var object
     */
    public $vkads_status;

    /**
     * @var AdGroup[]
     */
    public $ad_groups;

    /**
     * @var string
     */
    public $autobidding_mode;

    /**
     * @var float
     */
    public $budget_limit;

    /**
     * @var float
     */
    public $budget_limit_day;

    /**
     * @var string
     */
    public $date_start;

    /**
     * @var string
     */
    public $date_end;

    /**
     * @var float
     */
    public $max_price;

    /**
     * @var string
     */
    public $objective;

    /**
     * @var PricedGoal
     */
    public $priced_goal;

    /**
     * @var int
     */
    public $pricelist_id;
}