<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class URLAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $url;
}