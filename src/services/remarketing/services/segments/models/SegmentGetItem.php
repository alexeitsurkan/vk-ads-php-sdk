<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\SegmentUser;

class SegmentGetItem extends Model
{
    /**
     * @var int[]
     */
    public $campaign_ids;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string[]
     */
    public $flags;

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
    public $pass_condition;

    /**
     * @var SegmentRelation[]
     */
    public $relations;

    /**
     * @var int
     */
    public $relations_count;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var SegmentUser[]
     */
    public $users;
}