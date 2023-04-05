<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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