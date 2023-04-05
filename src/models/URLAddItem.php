<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;

class URLAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $url;
}