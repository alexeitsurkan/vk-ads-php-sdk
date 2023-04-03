<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class BannerContent extends Model
{
    /**
     * @var int
     */
    public $id;
    
    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $variants;
}