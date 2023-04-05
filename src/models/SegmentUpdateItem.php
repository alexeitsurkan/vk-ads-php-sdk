<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\SegmentUser;
use Symfony\Component\Validator\Constraints as Assert;

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