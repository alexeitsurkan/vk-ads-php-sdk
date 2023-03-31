<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\SegmentUser;

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