<?php

namespace app\vk_ads_api\src\services\ad_plans\models;

use app\vk_ads_api\src\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdPlanMassAction extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=1,
     *     max=2147483647
     * )
     */
    public $id;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;

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
}