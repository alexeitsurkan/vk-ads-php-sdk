<?php

namespace VkAdsPhpSdk\services\remarketing\services\segments\services\relations\models;

use VkAdsPhpSdk\components\Model;

class SegmentRelationGetItem extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $object_id;

    /**
     * @var string
     */
    public $object_type;

    /**
     * @var object
     */
    public $params;
}