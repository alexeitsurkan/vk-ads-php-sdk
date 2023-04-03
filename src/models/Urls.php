<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Urls extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $url_object_id;

    /**
     * @var string
     */
    public $url_object_type;

    /**
     * @var string[]
     */
    public $url_types;
}