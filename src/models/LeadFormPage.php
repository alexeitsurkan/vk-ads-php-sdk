<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormPage extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var Block[]
     */
    public $blocks;
}