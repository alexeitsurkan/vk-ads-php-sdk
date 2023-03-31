<?php

namespace app\vk_ads_api\src\services\ad_plans\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\PricedGoal;
use app\vk_ads_api\src\services\ad_groups\models\AdGroup;

class AdPlanAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;

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
     * [Assert\Date]
     */
    public $date_start;

    /**
     * @var string
     * [Assert\Date]
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
     * @Assert\Valid()
     */
    public $priced_goal;

    /**
     * @var int
     */
    public $pricelist_id;
}