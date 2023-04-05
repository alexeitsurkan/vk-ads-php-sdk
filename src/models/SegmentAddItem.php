<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class SegmentAddItem extends Model
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