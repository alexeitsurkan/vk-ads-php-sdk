<?php

namespace VkAdsPhpSdk\services\ad_groups\models;


use VkAdsPhpSdk\components\Model;

class AdGroupMassAction extends Model
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
     * @var TargetingsMassAction
     * @Assert\Valid()
     */
    public $targetings;

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