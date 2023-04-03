<?php

namespace VkAdsPhpSdk\services\remarketing\services\segments\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\SegmentUser;

class SegmentUpdateItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $pass_condition;

    /**
     * @var SegmentRelation[]
     * @Assert\NotBlank()
     */
    public $relations;
}